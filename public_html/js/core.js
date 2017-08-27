"use strict";

function loadFile(context, form, result) {
        var formData = new FormData();
        var file = context.files[0];
        formData.append('ufile', file);
        $.ajax({
            url: 'loader.php',
            type: "POST",
            data: formData,
            async: true,
            success: (msg) => {
                $.ajax({
                  url: 'worker.php',
                  type: "GET",
                  data: "datafile=" + file.name,
                  success: (m) => {
                    $('[name="' + form + '"]').fadeOut();
                    $(result).html(m).fadeIn();
                  }
                })
            },
            error: (msg) => {
                alert('Error while file uploading!');
            },
            cache: false,
            contentType: false,
            processData: false
        });
}



$(document).ready(() => {

$('#wrap').fullpage({
  sectionsColor : ['#3498db', '#2980b9', '#29B6F6', '#CE93D8'],
  anchors: ['1', '2', '3', '4'],
	navigation: true,
	navigationPosition: 'right',
  slidesNavigation: true,
  controlArrows: false,
	navigationTooltips: ['Introduction', 'How to use KNearestNeighbors?', 'Upload file']
});

$("input[type='file']").change(function(e){
  e.preventDefault();
  switch(this.name) {
    case 'nfile' : {
      loadFile(this, "phpml1", "#result-kne");
      break;
    }
    case 'sfile' : {
      loadFile(this, "phpml2", "#result-svc");
      break;
    }
    case 'kfile' : {
      loadFile(this, "phpml3", "#result-k-me");
      break;
    }
  }

});

});
