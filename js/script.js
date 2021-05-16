const DivContainer = document.getElementById("chart-container");
const csvFileInput = document.querySelector("#csvFileInput");



let x = document.cookie;
//document.write(x);
let id_utente = x.substring(3, x.length);



let valore_del_file = "";
let ecg_dati = 0;
let conta = 0;
if (csvFileInput) {


    csvFileInput.addEventListener("change", (e) => {
        Papa.parse(csvFileInput.files[0], {
            delimiter: ",",
            skipEmptyLines: true,
            complete: (results) => {

                // console.log(results.data.slice(1));
                //console.log( results.data[0])
                //                       riga/colonna
                // console.log(results.data[0][0])
                // console.log(results.data[1][0])

                let array_of_element = results.data.slice(1);
                let array_of_title = results.data[0];
                valore_del_file = array_of_title;

                document.cookie = "tipo_file=" + valore_del_file[1];
                // console.log( array_of_element.length)
                // console.log(array_of_title.length)
                //come contare gli elemnti nel array Javascript

                let valore = [];

                for (let i = 1; i < array_of_title.length; i++) {
                    for (let j = 0; j < array_of_element.length; j++) {
                        valore[j] = results.data[j][i];

                        //  let  milliseconds = results.data[j][0] * 1000 //1575909015000


                        //   let dateObject = new Date(milliseconds)
                        //   let humanDateFormat = dateObject.toLocaleString()

                        // assey[j] = humanDateFormat.slice(11);



                    }
                    let result = valore.map(i => Number(i));


                    ecg_dati = ecg_dati + result;
                    if (array_of_title[i] == "ecgLead1" || array_of_title[i] == "ecgLead2" || array_of_title[i] == "ecgLead3") {
                        conta++;
                        if (conta == 3) {
                            ecg_dati = ecg_dati / 3;
                            addNewDiv("ecgLead media");
                            disegnaGrafico(result, "ecgLead media");
                            //$('.isResizable').resizable();

                        }

                    } else {
                        addNewDiv(array_of_title[i]);
                        disegnaGrafico(result, array_of_title[i]);
                        //$('.isResizable').resizable();
                    }





                }
                //console.log(assex)




            }
        });

    });
    //console.log(array_3d);
    // let myJSON = JSON.stringify(array_3d);
    // fetch('main.php', {
    //     method: 'post',
    //     body: myJSON,

    // })

}
// let a = "acc"
// fetch('main.php', {
//     method: 'post',
//     body: JSON.stringify(a),

// })







//vedo che non sia nullo


// let x = document.cookie;
// //document.write(x);
// let id_utente = x.substring(3, x.length);

// console.log(id_utente);





function disegnaGrafico(valoreY, id_div) {

    // Create the chart
    Highcharts.stockChart(id_div, {


        rangeSelector: {
            selected: 1
        },

        title: {
            text: id_div
        },




        series: [{
                name: id_div,
                pointStart: Date.now(),
                pointInterval: 10,

                data: valoreY,
                tooltip: {
                    valueDecimals: 2
                },
                turboThreshold: 0
            }]
            // plotOptions:{ series:{ turboThreshold: 0 } }
    });

}


function addNewDiv(id_div) {
    const newDiv = document.createElement("div");
    console.log("add");
    newDiv.classList.add("isResizable");
    newDiv.setAttribute("id", id_div);
    DivContainer.appendChild(newDiv);
}

/**link utile
 * 
 * https://codepen.io/angeladelise/pen/xxwEazB?editors=1010
 */