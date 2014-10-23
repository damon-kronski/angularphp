function createApp(todolist){
  
  var app = angular.module('todoList', []);
  
  app.controller('TodoController', function(){
    this.todos = todolist;
  });
  
}
