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
            coments: [], // Comentarios

        },
        methods: {
            delet: function (event) {
                let btn = event.target.getAttribute('data-id');
                console.log(btn);
                eliminarComentario(btn);
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
            if (response.status == 404) {
                app.coments = [];

            }
        } catch (error) {
            console.log(error);
        }
    }
    //    async function puntuarComentario(puntaje,id) {
    //        console.log(puntaje);
    //        let datos = {
    //            "puntaje": puntaje
    //        };
    //
    //        try {
    //            let puntuar = await fetch(`${API_URL}/puntaje/${id}`, {
    //                "method": "PUT",
    //                "headers": { "Content-type": "application/json" },
    //                "body": JSON.stringify(datos),
    //
    //            });
    //            if (puntuar.status == 200) {
    //                console.log("Puntuado!");
    //                getComents();
    //            }
    //        }
    //        catch (error) {
    //            console.log(error);
    //        }
    //   }
    async function agregarcomentario(event) {
        event.preventDefault();
        let comentario = document.querySelector("#comentario").value;
        console.log(comentario);
        let id_juego = document.querySelector("#id_juego").innerHTML;
        console.log(id_juego);
        let puntaje = document.querySelector("#puntaje").value;
        console.log(puntaje);
        let datos = {
            "comentario": comentario,
            "puntaje": puntaje,
            "id_juego": id_juego,
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
            else if (agregar.status == 401) {
                alert("No tiene permisos para eliminar este comentario");
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
            else if (res.status == 401) {
                alert("No tiene permisos para eliminar este comentario");
            }
        } catch (error) {
            console.log(error);
        }

    }

    getComents();
});