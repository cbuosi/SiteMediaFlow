    

    const t_troca = 3500;



    const imagens = [

        "./img/config1_800.png",

        "./img/config2_800.png"

    ];



    const imagens2 = [

        "./img/video1.png",

        "./img/video2.png",

        "./img/video3.png"

    ];





    let indice = 0;

    let indice2 = 0;



    let img = null; // = document.getElementById("carousel-image");

    let img2 = null; // = document.getElementById("carousel2-image");



        let i = 0;



        const imgsTv = [

            "./img/tv11.png",

            "./img/tv22.png"

        ];



        function troca(n) 

        {



            i += n;



            if (i > 1) i = 0;

            if (i < 0) i = 1;



            document.getElementById("imgTV").src = imgsTv[i];



            //console.log('troca!');



        }



        let i2 = 0;



        const imgsRasp = [

            "./img/rasp1.png",

            "./img/rasp2.png"

        ];



        function troca2(n) {



            i2 += n;



            if (i2 > 1) i2 = 0;

            if (i2 < 0) i2 = 1;



            document.getElementById("imgRasp").src = imgsRasp[i2];



            //console.log('troca2!');



        }

        



$(document).ready(function () 

{



    // página carregada

    console.log("Página carregada!");



    img = document.getElementById("carousel-image");

    img2 = document.getElementById("carousel2-image");



   

    setInterval(() => {



        img.style.opacity = 0;

        img2.style.opacity = 0;



        setTimeout(() =>

        {

            indice = (indice + 1) % imagens.length;

            indice2 = (indice2 + 1) % imagens2.length;



            img.src = imagens[indice];

            img.style.opacity = 1;



            img2.src = imagens2[indice2];

            img2.style.opacity = 1;





        }, 500);



    }, t_troca);

   



    setInterval(function () 

    {

        troca(1);

        troca2(1);        

    }, t_troca);



});





