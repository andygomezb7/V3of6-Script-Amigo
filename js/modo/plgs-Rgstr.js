 jQuery.fn.fortalezaClave = function(){
        $(this).each(function(){
            elem = $(this);
            msg = $('<span>No segura</span>');
            elem.after(msg)
            elem.data("mensaje", msg);
            elem.keyup(function(e){
                elem = $(this);
                msg = elem.data("mensaje")
                claveActual = elem.attr("value");
                var fortalezaActual = "";
                if (claveActual.length < 5){
                    fortalezaActual = "No segura";
                }else{
                    if(claveActual.length < 8){
                        fortalezaActual = "Medianamente segura";
                    }else{
                        fortalezaActual = "Segura";
                    }
                }
                msg.html(fortalezaActual);
            });
        });
        return this;
    }
