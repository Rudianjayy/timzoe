
/*
  ================
      Message Scroll
  ================
*/

$(".message-scroll").mCustomScrollbar({
  scrollbarPosition:"outside",
  scrollInertia:450,
  theme:"dark-thin"
});


/*
  ================
      Top Search Scroll
  ================
*/

$(".top-search-scroll").mCustomScrollbar({
  axis:"yx",
  scrollbarPosition:"outside",
  scrollInertia:450,
  autoHideScrollbar: true,
  theme:"dark-thin"
});


/*
  ================
      Donut Chart
  ================
*/

new Chartist.Pie('.s-r', {
  series: [25, 75]
}, {
  donut: true,
  donutWidth: 40,
  donutSolid: true,
  startAngle: 270,
  showLabel: true
});

var bar = new ProgressBar.Circle("#daily", {
  color: '#1d1d1d',
  // This has to be the same size as the maximum width to
  // prevent clipping
  strokeWidth: 5,
  trailWidth: 3,
  trailColor: '#f3f3f3',
  easing: 'easeInOut',
  duration: 1400,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#00d1c1', width: 5 },
  to: { color: '#00d1c1', width: 5 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value + '%');
    }

  }
});
bar.text.style.fontSize = '1rem';

bar.animate(0.56);  // Number from 0.0 to 1.0

var bar = new ProgressBar.Circle("#weekly", {
  color: '#1d1d1d',
  // This has to be the same size as the maximum width to
  // prevent clipping
  strokeWidth: 5,
  trailWidth: 3,
  trailColor: '#f3f3f3',
  easing: 'easeInOut',
  duration: 1400,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#e95f2b', width: 5 },
  to: { color: '#e95f2b', width: 5 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value + '%');
    }

  }
});
bar.text.style.fontSize = '1rem';

bar.animate(0.6);  // Number from 0.0 to 1.0

var bar = new ProgressBar.Circle("#month", {
  color: '#1d1d1d',
  // This has to be the same size as the maximum width to
  // prevent clipping
  strokeWidth: 5,
  trailWidth: 3,
  trailColor: '#f3f3f3',
  easing: 'easeInOut',
  duration: 1400,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#0081e6', width: 5 },
  to: { color: '#0081e6', width: 5 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value + '%');
    }

  }
});
bar.text.style.fontSize = '1rem';

bar.animate(0.77);  // Number from 0.0 to 1.0


// New Product table
checkall('checkAll', 'chkbox');

// Latest Invoice table
checkall('invoiceAll', 'invoicechk');

// jvector map script

$('#world-map').vectorMap({

  map: 'world_mill_en',
      backgroundColor: '#fff',
      borderColor: '#818181',
      borderOpacity: 0.25,
      borderWidth: 1,
      color: '#f4f3f0',
      regionStyle: {
              initial: {
                  fill: '#f3f3f3'
              }
      },
      series: {
          regions: [{
              values: {
                  US:'#38a9ff',
                  AU:'#816cfd',
                  ES:'#00d1c1',
                  FR:'#f8538d',
                  IN:'#ffb88e',
              }
          }]
      },
      markerStyle: {
              initial: {
                  r: 9,
                  'fill': '#fff',
                  'fill-opacity': 1,
                  'stroke': '#000',
                  'stroke-width': 5,
                  'stroke-opacity': 0.4
              },
      },
      enableZoom: true,
      hoverColor: '#1f3892',
      hoverOpacity: null,
      normalizeFunction: 'linear',
      scaleColors: ['#b6d6ff', '#005ace'],
      selectedColor: '#c9dfaf',
      selectedRegions: [],
      showTooltip: true,

});


// Monthly Charts

var data = {
  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
  series: [
    

    [2, 3, 4, 3, 4, 1, 2],
    [3, 2, 3, 2, 3, 4, 3]
  ]
};

var options = {
    seriesBarDistance: 10,
    axisY: {
        labelInterpolationFnc: function (value) {
            return value + 'k';
        },
        onlyInteger: true,
    }
};

var responsiveOptions = [
  ['screen and (max-width: 575px)', {
    seriesBarDistance: 5,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('.v-pv-weekly', data, options, responsiveOptions);


$('.monthly-chart-tab li a').on('shown.bs.tab', function(event) {

  new Chartist.Bar('.v-pv-weekly', data, options, responsiveOptions);

  var responsiveOptionsMonthly = [
    ['screen and (max-width: 575px)', {
      axisX: {
        labelInterpolationFnc: function (value) {
          return value[0];
        }
      }
    }]
  ];

  new Chartist.Line('.v-pv-monthly', {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    series: [
      [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
      [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
    ]
  }, {
    fullWidth: true,
    // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
    axisY: {
      onlyInteger: true,
      offset: 20,
      labelInterpolationFnc: function (value) {
        return value + 'k';
      },
    }
  },responsiveOptionsMonthly);


  var responsiveOptionsYearly = [
    ['screen and (max-width: 575px)', {
      axisX: {
        labelInterpolationFnc: function (value) {
          return value[2] + value[3];
        }
      }
    }]
  ];

  new Chartist.Line('.v-pv-yearly', {
    labels: ['2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
    series: [
      [5, 9, 7, 8, 5, 3, 5, 4],
      [3, 6, 2, 4, 7, 8, 3, 9]
    ]
  }, {
    low: 0,
    showArea: true,
    axisY: {
        onlyInteger: true,
        offset: 20,
        labelInterpolationFnc: function (value) {
          return value + 'k';
        },
      }
  },responsiveOptionsYearly);

})


// Calender script
$('.calendar').pignoseCalendar();

// Latest Activities scroll

$(".latest-activities-scroll").mCustomScrollbar({
    axis:"yx", // vertical and horizontal scrollbar
    autoHideScrollbar:true
});