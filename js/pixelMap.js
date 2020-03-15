AmCharts.makeChart("map",{
    "type": "map",
    "pathToImages": "http://www.amcharts.com/lib/3/images/",
    "addClassNames": true,
    "fontSize": 15,
    "color": "#FFFFFF",
    "projection": "mercator",
    "backgroundAlpha": 1,
    "backgroundColor": "rgba(80,80,80,1)",
    "dataProvider": {
      "selectable" : true,
      "map": "worldLow",
      "getAreasFromMap": true,
      "images": [
        {
          "top": 60,
          "left": 100,
          "width": 120,
          "height": 70,
          "pixelMapperLogo": true,
          "imageURL": "./images/font3.png",
          "url": "./index.html",
        }
      ],
      "areas": [
        {
          "id": "AU",
          "title": "호주",
          "color": "rgba(216,144,75,0.8)",
          "url": "./compare.php?world_index=AU"
        },
        {
          "id": "CA",
          "title": "캐나다",
          "color": "rgba(242,246,15,0.8)",
          "url": "./compare.php?world_index=CA"
        },
        {
          "id": "CN",
          "title": "중국",
          "color": "rgba(255,96,89,0.8)",
          "url": "./compare.php?world_index=CN"
        },
        {
          "id": "JP",
          "title": "일본",
          "color": "rgba(75,98,216,0.8)",
          "url": "./compare.php?world_index=JP"
        },
        {
          "id": "KR",
          "title": "한국",
          "color": "rgba(75,216,181,0.8)",
          "url": "./compare.php?world_index=KR"
        },
        {
          "id": "US",
          "title": "미국",
          "color": "rgba(65,189,255,0.8)",
          "url": "./compare.php?world_index=US"
        },
        {
          "id": "VN",
          "title": "베트남",
          "color": "rgba(248,145,46,0.8)",
          "url": "./compare.php?world_index=VN"
        }
      ]
    },
    "balloon": {
      "horizontalPadding": 15,
      "borderAlpha": 0,
      "borderThickness": 1,
      "verticalPadding": 15
    },
    "areasSettings": {
      "color": "rgba(129,129,129,1)",
      "outlineColor": "rgba(80,80,80,1)",
      "rollOverOutlineColor": "rgba(80,80,80,1)",
      "rollOverBrightness": 20,
      "selectedBrightness": 20,
      "selectable": true,
      "unlistedAreasAlpha": 0,
      "unlistedAreasOutlineAlpha": 0
    },
    "imagesSettings": {
      "alpha": 1,
      "color": "rgba(129,129,129,1)",
      "outlineAlpha": 0,
      "rollOverOutlineAlpha": 0,
      "outlineColor": "rgba(80,80,80,1)",
      "rollOverBrightness": 20,
      "selectedBrightness": 20,
      "selectable": true
    },
    "linesSettings": {
      "color": "rgba(129,129,129,1)",
      "selectable": true,
      "rollOverBrightness": 20,
      "selectedBrightness": 20
    },
    "zoomControl": {
      "zoomControlEnabled": true,
      "homeButtonEnabled": true,
      "panControlEnabled": true,
      "right": 38,
      "bottom": 30,
      "minZoomLevel": 0.25,
      "gridHeight": 100,
      "gridAlpha": 0.1,
      "gridBackgroundAlpha": 0,
      "gridColor": "#FFFFFF",
      "draggerAlpha": 1,
      "buttonCornerRadius": 2
    },
    "mouseWheelScrollEnabled": true
  });
