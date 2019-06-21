const url = "http://localhost:8888/proyecto-laravel/public/"

window.addEventListener("load", function() {
    $(".btn-like").css("cursor", "pointer")
    $(".btn-dislike").css("cursor", "pointer")

    // Boton de like
    function like() {
        $(".btn-like")
            .unbind("click")
            .click(function() {
                console.log("has dado like")
                $(this)
                    .addClass("btn-dislike")
                    .removeClass("btn-like")
                $(this).attr("src", url + "images/heart-rojo.png")

                $.ajax({
                    url: url + "/like/" + $(this).data("id"),
                    type: "GET",
                    success: function(response) {
                        if (response.like) {
                            console.log("Has dado like a la publicación")
                        } else {
                            console.log("Error al dar like..")
                        }
                    }
                })

                dislike()
            })
    }
    like()

    function dislike() {
        // Boton de like
        $(".btn-dislike")
            .unbind("click")
            .click(function() {
                console.log("has dado dislike")
                $(this)
                    .addClass("btn-like")
                    .removeClass("btn-dislike")
                $(this).attr("src", url + "images/heart.png")

                $.ajax({
                    url: url + "/dislike/" + $(this).data("id"),
                    type: "GET",
                    success: function(response) {
                        if (response.like) {
                            console.log("Has dado dislike a la publicación")
                        } else {
                            console.log("Error al dar dislike..")
                        }
                    }
                })

                like()
            })
    }
    dislike()

    // Buscador

    $("#buscador").submit(function() {
        $(this).attr("action", url + "people/" + $("#buscador #search").val())
        console.log($("#buscador #search").val())
    })
})
