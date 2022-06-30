(function ($) {
    $(document).ready(function () {

        function getInterviewMessage(interview){
            let leadMessage="";
            let questions = interview.find('.question');
            questions.each(function (index,element) {

                let typeQuestions = $(element).data('questionType'); // тип ответов на ворос (checkbox || radio)
                let textQuestions = $(element).find('.question__text').text(); // текст вопроса
                let answers=""; // ответы

                switch (typeQuestions) {
                    case "checkbox" :
                        let checkedCheckbox = $(element).find('input:checkbox:checked');
                        if (checkedCheckbox.length > 0){
                            checkedCheckbox.each(function(){
                                answers += $(this).val() + ", ";
                            });
                        }
                        break;

                    case "radio" :
                        let checkedRadio = $(element).find('input[type="radio"]:checked');
                        if (checkedRadio.length > 0){
                            answers = checkedRadio.val();
                        }
                        break;

                    case "select" :
                        let select = $(element).find('select');
                        answers = select.val();
                        break;

                    case "range" :
                        let range = $(element).find('input[type="range"]');
                        answers = range.val() + range.data('unit');
                        break;

                    case "text" :
                        let textI = $(element).find('input[type="text"]');
                        answers = textI.val()
                        break;

                    case "number" :
                        let textN = $(element).find('input[type="number"]');
                        answers = textN.val()
                        break;

                    case "textarea" :
                        let textTA = $(element).find('textarea');
                        answers = textTA.val()
                        break;
                }

                leadMessage += "Вопрос: " + textQuestions + "\nОтвет: " + answers + "\n\n";

            })
            return leadMessage;
        }

        $(document).on('mousedown','.interview-btn',function(e){
            let btn = $(e.currentTarget);
            let interview = btn.parents('.w-interview');


            let message = getInterviewMessage(interview);
            console.log(message);
            interview.find('input[name=note]').val(message);
            console.log(interview.find('input[name=note]').val())
        });


    });
})(window.jQuery);
