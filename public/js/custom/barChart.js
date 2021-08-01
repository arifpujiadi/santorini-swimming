/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    Morris.Bar({
        element: 'graph_bar',
        data: [
            {Sabuk: 'Kyu 10', Orang: 120},
            {Sabuk: 'Kyu 9', Orang: 326},
            {Sabuk: 'Kyu 8', Orang: 274},
            {Sabuk: 'Kyu 7', Orang: 241},
            {Sabuk: 'Kyu 6', Orang: 234},
            {Sabuk: 'Kyu 5', Orang: 523},
            {Sabuk: 'Kyu 4', Orang: 124},
            {Sabuk: 'Kyu 3', Orang: 425},
            {Sabuk: 'Kyu 2', Orang: 235},
            {Sabuk: 'Kyu 1', Orang: 532},
            {Sabuk: 'Dan 1', Orang: 122},
            {Sabuk: 'Dan 2', Orang: 58},
            {Sabuk: 'Dan 3', Orang: 86},
            {Sabuk: 'Dan 4', Orang: 45},
            {Sabuk: 'Dan 5', Orang: 32}
        ],
        xkey: 'Sabuk',
        ykeys: ['Orang'],
        labels: ['Orang '],
        barRatio: 0.15,
        barColors: ['#26B99A'],
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });

    Morris.Area({
        element: 'graph_area',
        data: [
            {tahun: '2013', emas: 1, perak: 2, perunggu: 3},
            {tahun: '2014', emas: 2, perak: 3, perunggu: 2},
            {tahun: '2015', emas: 2, perak: 2, perunggu: 3},
            {tahun: '2016', emas: 1, perak: 4, perunggu: 5},
            {tahun: '2017', emas: 2, perak: 5, perunggu: 3}
        ],
        xkey: 'tahun',
        ykeys: ['emas', 'perak', 'perunggu'],
        labels: ['Emas', 'Perak', 'Perunggu'],
        fillOpacity: 0,
        hideHover: 'auto',
        behaveLikeLine: true,
        resize: true,
        pointFillColors: ['#73879C'],
        pointStrokeColors: ['white'],
        lineColors: ['gold', 'silver', '#CD7F32']
    });





});