angular.module('myApp',['ngAnimate']);

angular.module('myApp').controller('FormController',FormController);

function FormController(){
	var vm = this;
	vm.step="one";

	vm.stepTwo=stepTwo;
	vm.stepThree=stepThree;
	vm.stepOne=stepOne;

	function stepOne(){
		vm.step="one"; 
	}

	function stepTwo(){
		vm.step="two";
		annimateLeft(); 
	}

	function stepThree(){
		vm.step="three";
	}

	function annimateLeft(){
        
        if(self.step = 'two'){
            $("#two").addClass('w3-annimate-left');
        }
    }
}