$(document).ready(function () {
    let formDataSession = sessionStorage.getItem('formData')
    if (formDataSession){
        $interviewThank = $('.interview-thank');
        $interviewThank.css("display", "block");
        let formData = JSON.parse(formDataSession);
        $interviewThank.find('input[name="phone"]').val(formData.phone)
    }
})
