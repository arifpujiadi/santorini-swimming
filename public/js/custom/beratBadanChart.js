/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    Morris.Area({
        element: 'graph_area',
        data: [
            {tahun: '2016-2', tinggi: 160, berat: 55},
            {tahun: '2016-8', tinggi: 165, berat: 55},
            {tahun: '2017-2', tinggi: 170, berat: 70},
            {tahun: '2017-8', tinggi: 175, berat: 75}
        ],
        xkey: 'tahun',
        ykeys: ['tinggi', 'berat'],
        labels: ['Tinggi', 'Berat'],
        fillOpacity: 0,
        hideHover: 'auto',
        behaveLikeLine: true,
        resize: true,
        pointFillColors: ['#73879C'],
        pointStrokeColors: ['white'],
        lineColors: ['#26b99a', '#34495e'],
    });


});