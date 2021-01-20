function validateForm() {
    var x = document.forms["form"]["fName"].value;
    if (x == "") {
        $('#alert1').html('<div class="alert alert-danger" role="alert"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Please fill all the details </div>');
        return false;
    }
    var y = document.forms["form"]["lName"].value;
    if (y == "") {
        $('#alert2').html('<div class="alert alert-danger" role="alert"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Please fill all the details </div>');
        return false;
    }
    var z = document.forms["form"]["age"].value;
    if (z == "") {
        $('#alert3').html('<div class="alert alert-danger" role="alert"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Please fill all the details </div>');
        return false;
    }
    var f = document.forms["form"]["tel"].value;
    if (f == "") {
        $('#alert4').html('<div class="alert alert-danger" role="alert"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Please fill all the details </div>');
        return false;
    }

    var x = document.forms["form"]["fName"].value;
    var letters = /^[a-z]*$/i;
    if (!x.match(letters)) {
        $('#alert1').html('<div class="alert alert-danger" role="alert"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Please enter valid details </div>');
        return false;
    }
    var y = document.forms["form"]["lName"].value;
    var letters = /^[a-z]*$/i;
    if (!y.match(letters)) {
        $('#alert2').html('<div class="alert alert-danger" role="alert"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Please enter valid details </div>');
        return false;
    }
    var z = document.forms["form"]["age"].value;
    var letters = /^[a-z]*$/i;
    if (z.match(letters)) {
        $('#alert3').html('<div class="alert alert-danger" role="alert"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Please enter valid details </div>');
        return false;
    }
    var f = document.forms["form"]["tel"].value;
    var letters = /^[a-z]*$/i;
    if (f.match(letters)) {
        $('#alert4').html('<div class="alert alert-danger" role="alert"><button type="button" class="close close-alert" data-dismiss="alert" aria-hidden="true">×</button>Please enter valid details </div>');
        return false;
    }

}

$("#btnadd").click(function() {
    validateForm();
});