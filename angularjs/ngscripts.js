var app1 = angular.module('app1', []);

app1.controller('ctrl', function($scope){
	
});

app1.controller('userCtrl', function($scope) {
	
	$scope.user = [{
		userfName: "Mihkel",
		userlName: "Kaasik",
		userPassword: "lolyolo"
	}];
	
	$scope.saveUser = function(userInfo) {
		if($scope.userForm.$valid){
			$scope.user.push({
				userfName: userInfo.userfName,
				userlName: userInfo.userlName,
				userPassword: user.userPassword
			});
			console.log("User saved")
		}
		else {
			console.log("User not saved");
		}
	}
});