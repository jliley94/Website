$(document).ready(function(){
  //when one of the skills are selected show a message for the selected skill
  $("#Skills a").on('click', function(event) {
    var hash = this.hash;
    var message = "";
      
      switch(hash) {
        case '#1':
        //HTML, CSS
        message = "I have a lot of experience with building websites, my highest grades at university were in the web development modules.";
        break;
        case '#2':
        //Javascript, JQuery, Bootstrap
        message = "I have made many interactive web applications using Javascript, It is once of my strongest skills. I love learning and implimenting new frameworks.";
        break;
        case '#3':
        //PHP, SQL
        message = "As well as being experienced in frontend development, I have made a lot of websites which require a databases and backend processing of data.";
        break;
        case '#4':
        //Java, Android
        message = "During my last 2 years at university, I chose to learn object-oriented languages. This gave me experience building applications for phones with android.";
        break;
        case '#5':
        //Python
        message = "I have started learning Python. It is important for me to continue educating myself now i have left university.";
        break;
        case '#6':
        //GitHub
        message = "This web portfolio is my first project that I have used with GitHub and I am already familiar with it and its importance in a team working enviroment";
        break;
        case '#7':
        //C++, C#, MVC
        message = "I have some experince with these languages, however I have only used them in my spare time so I am not fluent";
      }

      document.getElementById("info").innerHTML = message;
  });
});