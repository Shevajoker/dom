/**
 * Created by Sheva on 10.01.2017.
 */


function getUserData(id_form) {
    var data = {};

    $('input, textarea, select', id_form).each(function () {
        if (this.name && this.name!=''){
            data[this.name] = this.value;
            console.log('data[' + this.name + '] = ' + data[this.name]);
        }

    });
    return data;
}

function registerNewUser() {
    var userData = getUserData('#registration');

    console.log(userData);
    console.log('________________');

    $.ajax({
        type: 'POST',
        async: false,
        url: "/?controller=user&action=userAdd",
        data: userData,
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $('#userInfo_user').html(data['user']);

            $('#userLog').hide();
            $('#registration').hide();

            $('#userInfo_r').show();

        }
    });


}

function logIn() {
    var userData = getUserData('#userLog');

    // console.log(userData);

    $.ajax({
        type: 'POST',
        async: false,
        url:"/?controller=user&action=userLogIn",
        data: userData,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $('#userInfo_user').html(data['user']);

            $('#userLog').hide();
            $('#registration').hide();
            $('#userInfo_r').show();

    }
    });

}

function addNewArt() {

    var artData = getUserData('#newArticle');
    console.log(artData);

    $.ajax({
        type: 'POST',
        async: false,
        url: "/?controller=article&action=addNew",
        data: artData,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data['success']){
                alert(data['message']);
                // $('#name_art').value('');
                // $('#text_art').value('');
            }
        }
    });
}

function removeArticle(artId) {
    console.log('removeArticle - ' + artId);

    var id = {};
    id['id'] = artId;

    $.ajax({
        type: 'POST',
        async: false,
        url: "/?controller=article&action=removeArticle",
        data: id,
        dataType: 'json',
        success: function (data) {
            console.log('Удаление статьи. - ');
            console.log(data);
            console.log(data['message']);

            $('#articleDivId').html('Статья удалена.');
        }
    });
}



//-------------------ADMIN

function adminLogIn() {

    var admData = getUserData('#form_admin');
    console.log(admData);

    $.ajax({
        type: 'POST',
        async: false,
        url: "/?controller=admin&action=logInAdmin",
        data: admData,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data['success']){
                $('#form_admin').hide();
                $('#admin_links').show();
                $('#adm_err').hide();
            }else {
                $('#adm_err').html(data['message']);
            }

        }
    });


}
