

$(document).ready(function () {

  restartQuiz();

  const startBtn = document.getElementById("start-btn");
  const quizContainer = document.getElementById("quiz");
  const quizForm = document.getElementById("quizForm");
 

  function restartQuiz() {
  
    $("#start-btn").click(function (e) {
      e.preventDefault();
       startQuiz();

    });

  }

  let questionElement = document.getElementById("questions");
  const answerButtons = document.getElementById("answer-buttons");
  const nextButton = document.getElementById("next-btn");
  const restartButton = document.getElementById("restart-btn");
  const showTime = document.getElementById("countdown");

  let currentQuestionIndex = 0;
 
  let myquestions = []
  function generateExamID() {
    return Math.random().toString(36).substring(2, 10).toUpperCase();
  }
  function startQuiz() {
   
   
    ExamSession = [];
    Answers = [];
   
  $(".loader").removeClass("hide")
    $.ajax({
      url: "create-exam",
      type: 'POST',
      dataType: "json",
      success: function (result) {
        myquestions = result.questions

        ExamSession.push({
          data: {
            exam_id: result.exam_id,
          },
          answers: [],
        });
        result.questions.forEach(q => {
          ExamSession[0].answers.push({
            question_id: q.question_id.toString(),
            answer_id: 0,
          })
        })
        


        currentQuestionIndex = 0;
        score = 0;
        nextButton.innerHTML = "Next";
        restartButton.classList.add("hide");
        nextButton.classList.remove("hide");
        clearInterval(quizTimer);
        countdownTime = time * 60 * 60;
        quizTime = countdownTime / 60;
        counting.innerHTML = `${Math.floor(quizTime / 60)} : ${Math.floor(quizTime % 60)}`;
        $(".loader").addClass("hide")
        startCountdown();
        showQuestion();

      }
    })

  }

  function showQuestion() {
    resetState();
    let currentQuestion = myquestions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question_text;

    const shuffledAnswers = shuffleArray(currentQuestion.answers);

    shuffledAnswers.forEach((answer) => {
      const button = document.createElement("button");
      button.innerHTML = answer.ans_option;
      button.classList.add("btn", "answer-button");
      answerButtons.appendChild(button);

      button.dataset.question_id = currentQuestion.question_id;
      button.dataset.answer_id = answer.answer_id;
    });
    quizForm.classList.add("hide");
    $("#quiz").removeClass("hide")
  }

  function shuffleArray(array) {
    const shuffledArray = array.slice();
    for (let i = shuffledArray.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [shuffledArray[i], shuffledArray[j]] = [shuffledArray[j], shuffledArray[i]];
    }
    return shuffledArray;
  }
  function resetState() {
    while (answerButtons.firstChild) {
      answerButtons.removeChild(answerButtons.firstChild);
    }
  }

 
  $("body").on("click", ".answer-button",function(e){

  const selectedBtn = e.target;

  selectedBtn.classList.add("answered")
 
  let quest_id = selectedBtn.dataset.question_id
  let ans_id = selectedBtn.dataset.answer_id
  ExamSession[0].answers.map(q => q.question_id === quest_id ? q.answer_id = ans_id : q)

  Array.from(answerButtons.children).forEach((button) => {
   
    button.disabled = "true";
  });
  });

  function haveNextButton() {
    currentQuestionIndex++;
    if (currentQuestionIndex < myquestions.length) {
      showQuestion();
    } else {
      nextButton.innerHTML = "Submit";
    }
  }

  $("#next-btn").on("click", function () {


    if (currentQuestionIndex < myquestions.length) {
      haveNextButton();
    } else {
      submitFinal();
    }

  })

  function startCountdown() {
    quizTimer = setInterval(function () {
      if (quizTime <= 0) {
        clearInterval(quizTimer);
        counting.innerHTML = "";
        showScore();
      } else {
        quizTime--;
        let sec = Math.floor(quizTime % 60);
        let min = Math.floor(quizTime / 60) % 60;
        counting.innerHTML = `${min} : ${sec}`;
      }
    }, 1000);
  }



  function submitFinal() {
    var confirmation = confirm("Do you want to submit? This cannot be undone");
    if (confirmation) {
      clearInterval(quizTimer);
      counting.innerHTML = "0 : 00";

      let ans = ExamSession[0].answers
      let examdata = ExamSession[0].data
      let exam_id = examdata.exam_id
      let answers = JSON.stringify(ans)
      var data = `exam_id=${exam_id}&answers=${answers}`;

      $.ajax({
        url: "/add_result",
        type: "POST",
        data: data,
        dataType: "json",
        success: function (data) {
          showScore(data.score);
        },
        error: function (err) {
          alert("ann error has occured. Please try again");
        }
      })


    }
  }

  function showScore(score = 0) {
    resetState();
    const percentage = (score / myquestions.length) * 100;
    questionElement.innerHTML = `Score: ${score}/${myquestions.length}  (${percentage}%)`;
    restartButton.classList.remove("hide");
    nextButton.classList.add("hide");
  
    ExamSession[0].answers.forEach((ans) => {
      var ques = myquestions.filter((q) => q.question_id == ans.question_id);
      let questionTest = ques[0].question_text;
      let AllAnswers = ques[0].answers;
      let selectAnswer = AllAnswers.filter((a) => a.value == ans.answer_id);
      

      AllAnswers.forEach((answer) => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
      });
     
    });
  }

  function redirectToExamDashboard() {
    window.location.href = '/exams';
  }

  $("#restart-btn").on("click", function () {
    redirectToExamDashboard();
  })

  $("#exam_one").on("click", function(){
    $("#options").addClass("hide");
    $("#quizForm").removeClass("hide");
  
  })

  $("#exam_two").on("click", function(){
    $("#options").addClass("hide");
    $("#quizForm").removeClass("hide");
  
  })
  

  let quizTimer;
  let time = 1;
  let countdownTime = time * 60 * 60;
  let quizTime = countdownTime / 60;

  let counting = document.getElementById("countdown");

 
 


})