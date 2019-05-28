$(document).ready(function() {
    console.log('load');
    link = '/../application/core/download_files.php';
    $(this).on("click", "a", function () {
        if ($(this).hasClass('download__link_visitingRules'))
        {
            fileAddr = '/../../download/VisitingRules.doc';
            submit(link, fileAddr )
            
        } else if ($(this).hasClass('download__link_conditions')) 
        {
            fileAddr = '/../../download/ConditionsAndOtherRules.doc';
            submit(link, fileAddr )
        }
    });
   
  function submit(link, fileAddr) {
    var form = $('<form>', {
        method: 'post',
        // target: "_blank",
        action: link
      });
    $(form).append(
        $('<input>', {
            type: 'hidden',
            name: 'doc',
            value: fileAddr
        })
    );
    $(form).css("display", "none");
    $(document.body).append(form);
    $(form).submit();
  };
        
})


