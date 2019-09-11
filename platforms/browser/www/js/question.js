function Quiz(questions) {
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}
 
Quiz.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
}
 
Quiz.prototype.guess = function(answer) {
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        this.score++;
    }
 
    this.questionIndex++;
}
 
Quiz.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
}
 
 
function Question(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
}
 
Question.prototype.isCorrectAnswer = function(choice) {
    return this.answer === choice;
}
 
 
function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;
 
        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }
 
        showProgress();
    }
};
 
function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};
 
 
function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};
 
function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your score is: " + quiz.score + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};
 
// create questions here
var questions = [
    new Question("At all times travel at least with a", ["4 seconds time delay", "2 seconds time delay","10 seconds time delay", "3 seconds time delay"], "2 seconds time delay"),
    new Question("The tow - rope must not be longer than", ["2.5 meters", "4.5 meters", "1.5 meters", "3.5 meters"], "3.5 meters"),
    new Question("tyre must have a tread of at least ", ["5 mm in depth", "3 mm in depth","1 mm in depth", "4 mm in depth"], "1 mm in depth"),
    new Question("The following vehicles may not be used on a freeway", ["motor cycle", "a pedal cycle", "trucks", "heavy motor vehicle"], "a pedal cycle"),
    new Question("Always drive in the ", ["right-hand lane", "left-hand lane", "middle of the road", "All"], "left-hand lane"),
    new Question("The primary rule of the road is ", ["Keep Right, Pass Right", "Keep Left, Pass Right", "Keep Left, Pass Left", "Keep Right, Pass Left"], "Keep Left, Pass Right"),
    new Question("Speed limit of buses and minibuses on freeway is", ["120 km/h", "100 km/h", "80 km/h", "60 km/h"], "100 km/h"),
    new Question("The maximum speed allowed for towing a vehicle is ", ["60 km/h", "30 km/h", "40 km/h", "35 km/h"], "30 km/h")
];
 
// create quiz
var quiz = new Quiz(questions);
 
// display quiz
populate();