function formataMoeda()
{
    if($("input.dinheiro") != null){
        $('input.dinheiro').mask('000.000.000.000.000,00', {reverse: false});
    }        
    
}

jQuery(function() {
    formataMoeda();
  });

  