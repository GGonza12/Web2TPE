"use strict"
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#agregar_comentario").addEventListener("click", agregarcomentario);
    let id = document.querySelector("#id_juego").innerHTML;
    let API_URL = `http://localhost/Web2TPE/tpe/api/comentario`;

    console.log(id);

    let app = new Vue({
        el: "#comentarios",

        data: {
            titulo: "Comentarios",
            coments: [], // this->smarty->assign("tareas",  $tareas)

        },
        methods: {
            delet: function (event) {
                let btn = event.target.getAttribute('data-id');
                console.log(btn);
                eliminarComentario(btn);
            },
            puntuar: function(event){
                let id = event.target.getAttribute('data-id');
                console.log(id);
                let puntaje = document.querySelector("#puntaje").value;
                console.log(puntaje);
                puntuarComentario(puntaje,id);
            }

        }
    });

  //  async function getComents() {
        //fetch para traer todas las tareas
  //      try {
   //         let response = await fetch(`${API_URL}s`, {
   //             "method": "POST",
   //             "mode": 'cors',
   //             "headers": { "Content-type": "application/json" },
   //         });
   //         let coments = await response.json();
   //         if (response.status == 200) {
   //             app.coments = coments;
   //             console.log(coments);
   //         }
//
   //     } catch (error) {
   //         console.log(error);
   //     }
   // }



    async function getComents() {
        //fetch para traer todos loscomentarios de ese juego
        try {
            let response = await fetch(`${API_URL}/juego/${id}`, {
                "method": "GET",
                "mode": 'cors',
                "headers": { "Content-type": "application/json" },
            });
            let coments = await response.json();
            if (response.status == 200) {
                app.coments = coments;
                console.log(coments);
            }

        } catch (error) {
            console.log(error);
        }
    }
    async function puntuarComentario(puntaje,id) {
        console.log(puntaje);
        let datos = {
            "puntaje": puntaje
        };

        try {
            let puntuar = await fetch(`${API_URL}/puntaje/${id}`, {
                "method": "PUT",
                "headers": { "Content-type": "application/json" },
                "body": JSON.stringify(datos),

            });
            if (puntuar.status == 200) {
                console.log("Puntuado!");
                getComents();
            }
        }
        catch (error) {
            console.log(error);
        }
    }
    async function agregarcomentario(event) {
        event.preventDefault();
        let comentario = document.querySelector("#comentario").value;
        console.log(comentario);
        let id_juego = document.querySelector("#id_juego").innerHTML;
        console.log(id_juego);
        let datos = {
            "comentario": comentario,
            "imagen": "atest",
            "id_juego": id_juego,
            "id_usuario": 10,
        };

        try {
            let agregar = await fetch(`${API_URL}s`, {
                "method": "POST",
                "mode": 'cors',
                "headers": { "Content-type": "application/json" },
                "body": JSON.stringify(datos),

            });
            if (agregar.status == 200) {
                console.log("Agregado!");
                getComents();
            }
        }
        catch (error) {
            console.log(error);
        }
    }
    async function eliminarComentario(id) {

        console.log(id);

        try {
            let res = await fetch(`${API_URL}/${id}`, {
                "method": "DELETE",
                "mode": 'cors',

            });

            if (res.status == 200) {
                console.log("Eliminado!");
                getComents();

            }
            else {
                console.log("error");
                console.log(id);
            }
        } catch (error) {
            console.log(error);
        }

    }

    getComents();
});