$("div[id^='formulariomodal']").each(function(){
  
    var currentModal = $(this);
    
    //click next
    currentModal.find('.btn-next').click(function(){
      currentModal.modal('hide');
      currentModal.closest("div[id^='formulariomodal']").nextAll("div[id^='formulariomodal']").first().modal('show'); 
    });
    
    //click prev
    currentModal.find('.btn-prev').click(function(){
      currentModal.modal('hide');
      currentModal.closest("div[id^='formulariomodal']").prevAll("div[id^='formulariomodal']").first().modal('show'); 
    });
  
  });
  