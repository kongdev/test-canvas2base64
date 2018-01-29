<style>
body {
    font-family: "Lucida Grande", "Lucida Sans", Arial, sans-serif;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;

}

.dataset {
    float: left;
    vertical-align: top;


}

.widget {
    display: inline-block;
    background-color: white;
    font-size: 14px !important;
    line-height: 20px !important;

    margin: 5px;
    vertical-align: top;
    color: #333;

    border-radius: 5px;
    margin: 10px;
    padding-bottom: 20px;
    border: 1px solid lightgray;


    border-radius:5px;
    -webkit-border-radius: 5px;


    display: inline-block;
    page-break-after: always;

}

.widget .header p {
   padding: 10px;
   border-bottom: 1px solid lightgrey;
   max-width: 360px;
}

.widget .header .title {
    font-weight: bold;
    vertical-align: middle;
    min-height: 36px;
    padding: 5px 10px 5px 10px;

}

.widget .header:hover {
    background-color: #f4f4f4;
}

.widget .header  .title.selected {
    border-color: cornflowerblue;
    background-color: #EEF;

}

.widget .content {
    padding: 5px;
    overflow-y: auto;
    max-height: 400px;
}

.autolayout {
    display: inline-block;
}

.element {
    width: 360px;
}

.compact .content {
    display: table;
    width: 100%;
}

.compact .row {
    display: table-row;
    width: 100%;
}

.compact .cell {
    display: table-cell;
}

.compact .row.selected {
    background-color: #eee;
}



.toolbar {
    display: block;
    vertical-align: top;
    margin: 10px;
}

.toolbar .basis {
    min-width: 100px;
}

.btn {
    /*min-width: 60px;*/
}


.cell.value {
    overflow: hidden;
    text-wrap: none;
    white-space: nowrap;
    text-overflow: ellipsis;
    text-align: right;
    padding-right: 10px;
}

.cell.freq {
    width: 60px;
}

.cell.glyph {
    vertical-align: middle;
    width: 100px;
}


.element {

}
.element table {
    table-layout: fixed;
    width: 100%;
}

.element td {
    padding: 0px;

}

.element .selectable:hover {
    background-color: #f4f4f4;
}


.element .stat {
    text-align: right;
    padding-right: 20px;
    font-weigth: bold;
    color: darkgray;
}



.element .bar {
    height: 18px;
    display: inline-block;
    float: left;
}
.bar-both {
    background-color: #0a67a3 !important;

}

.bar-fg {
    background-color: #3e97d1 !important;
}

.bar-bg {
    background-color: #ddd !important;
}

.selected .bar-fg {
    background-color: #FC0;
}

.selected .bar-both  {
    background-color:#FA0;
}

tr.selected {
    background-color: #eee;
}

.crosstab .selectable:hover {
    background-color: #f4f4f4;
}

.crosstab tr.selected {
    background-color: #eee;
}

.crosstab .header p {
    max-width: 600px;
}


.crosstab td {
  padding: 0 5px 0 5px;
  text-align: right;
}

.crosstab td.value {
  min-width: 60px;
  max-width: 240px;
  text-align: left;
}

.crosstab .cell {
    vertical-align: top;
}



.crosstab th.cell {
    max-width: 120px;
    overflow: hidden;
    white-space: normal;
    text-overflow: ellipsis;
    text-align: right;
    padding-right: 10px;
    vertical-align: bottom;
}

.crosstab .n {
    color: darkgray;
}
.fieldlist {
}

.constraints {
    min-width:300px;
    padding: 10px;

    border-radius:5px;
    -webkit-border-radius: 5px;


}
.constraints table {
    width: 100%;

}

.sidenote {
  max-width:300px;
  padding: 0 10px 0px 10px;
  display: inline-block;
  vertical-align: top;
}

.headnote {
    max-width: 600px;
    padding: 10px;
    margin: 10px;
    display: inline-block;
}

.info-block {
    /*border: 1px solid lightgrey;*/
    background-color: #eee;
    vertical-align: top;
    margin: 10px;
    padding: 10px;
    display: block;

    /*box-shadow: 0 0 0 0px #9bc0cf, 0 0 0 3px #e0ebf0;*/
}

.menu-item {
}

.menu-item-value {
    text-align: right;
    float: right;
}

.gradient-blue {
    background: #b8e1fc; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2I4ZTFmYyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwJSIgc3RvcC1jb2xvcj0iI2E5ZDJmMyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjI1JSIgc3RvcC1jb2xvcj0iIzkwYmFlNCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjM3JSIgc3RvcC1jb2xvcj0iIzkwYmNlYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzkwYmZmMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUxJSIgc3RvcC1jb2xvcj0iIzZiYThlNSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjgzJSIgc3RvcC1jb2xvcj0iI2EyZGFmNSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNiZGYzZmQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #b8e1fc 0%, #a9d2f3 10%, #90bae4 25%, #90bcea 37%, #90bff0 50%, #6ba8e5 51%, #a2daf5 83%, #bdf3fd 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #b8e1fc), color-stop(10%, #a9d2f3), color-stop(25%, #90bae4), color-stop(37%, #90bcea), color-stop(50%, #90bff0), color-stop(51%, #6ba8e5), color-stop(83%, #a2daf5), color-stop(100%, #bdf3fd)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #b8e1fc 0%, #a9d2f3 10%, #90bae4 25%, #90bcea 37%, #90bff0 50%, #6ba8e5 51%, #a2daf5 83%, #bdf3fd 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #b8e1fc 0%, #a9d2f3 10%, #90bae4 25%, #90bcea 37%, #90bff0 50%, #6ba8e5 51%, #a2daf5 83%, #bdf3fd 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #b8e1fc 0%, #a9d2f3 10%, #90bae4 25%, #90bcea 37%, #90bff0 50%, #6ba8e5 51%, #a2daf5 83%, #bdf3fd 100%); /* IE10+ */
    background: linear-gradient(to bottom, #b8e1fc 0%, #a9d2f3 10%, #90bae4 25%, #90bcea 37%, #90bff0 50%, #6ba8e5 51%, #a2daf5 83%, #bdf3fd 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b8e1fc', endColorstr='#bdf3fd', GradientType=0); /* IE6-8 */
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>



<span id="widget" class="widget" field="AGE" roundby="20" description="Patient age, in years">
    <div class="header ng-scope">
      <div class="title ng-binding">AGE</div>
      <p class="ng-binding">Patient age, in years</p>
    </div>
    <div class="element ng-scope">
      <div ng-show="hasData()" class="content">
        <table ng-model="table" class="ng-pristine ng-valid">
          <colgroup>
            <col/>
            <col width="60x"/>
            <col width="100px"/>
          </colgroup>
          <thead>
            <tr>
              <th class="cell value">Value</th>
              <th class="cell freq">Freq</th>
              <th class="cell value"></th>
            </tr>
          </thead>
          <tbody>
<tr ng-repeat="rowKey in table.rowKeys | orderBy:elementRowSort " ng-click="onSelect(rowKey, $event.shiftKey)" ng-class="{true:'selected'}[isSelected(rowKey)]" data-key="0" class="selectable ng-scope">
            <td class="cell value"><span tooltip="0 to 19" class="ng-scope ng-binding">0 to 19</span>
            </td>

            <td class="cell freq ng-binding">17.2%</td>
            <td class="cell glyph">
              <span class="bar bar-both" ng-style="{width: (table.getBothPct(rowKey) | barSize)+'%' }" style="width: 17.234468937875754%;"></span>
              <span class="bar bar-fg" ng-style="{width: (table.getFgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
              <span class="bar bar-bg" ng-style="{width: (table.getBgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
            </td>
          </tr><tr ng-repeat="rowKey in table.rowKeys | orderBy:elementRowSort " ng-click="onSelect(rowKey, $event.shiftKey)" ng-class="{true:'selected'}[isSelected(rowKey)]" data-key="20" class="selectable ng-scope">
            <td class="cell value"><span tooltip="20 to 39" class="ng-scope ng-binding">20 to 39</span>
            </td>
            <td class="cell freq ng-binding">18.0%</td>
            <td class="cell glyph">
              <span class="bar bar-both" ng-style="{width: (table.getBothPct(rowKey) | barSize)+'%' }" style="width: 18.03607214428858%;"></span>
              <span class="bar bar-fg" ng-style="{width: (table.getFgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
              <span class="bar bar-bg" ng-style="{width: (table.getBgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
            </td>
          </tr><!-- end ngRepeat: rowKey in table.rowKeys | orderBy:elementRowSort --><tr ng-repeat="rowKey in table.rowKeys | orderBy:elementRowSort " ng-click="onSelect(rowKey, $event.shiftKey)" ng-class="{true:'selected'}[isSelected(rowKey)]" data-key="40" class="selectable ng-scope">
            <td class="cell value"><span tooltip="40 to 59" class="ng-scope ng-binding">40 to 59</span>
            </td>

            <!--<td >{{table.getRowPercent('current', rowKey) | percent}}</td>-->
            <td class="cell freq ng-binding">34.3%</td>
            <td class="cell glyph">
              <!--<div class="bar bar-both" style="width: {{(row.current.pct * 100)||2}}px; " ></div>-->
              <span class="bar bar-both" ng-style="{width: (table.getBothPct(rowKey) | barSize)+'%' }" style="width: 34.2685370741483%;"></span>
              <span class="bar bar-fg" ng-style="{width: (table.getFgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
              <span class="bar bar-bg" ng-style="{width: (table.getBgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
            </td>
          </tr><!-- end ngRepeat: rowKey in table.rowKeys | orderBy:elementRowSort --><tr ng-repeat="rowKey in table.rowKeys | orderBy:elementRowSort " ng-click="onSelect(rowKey, $event.shiftKey)" ng-class="{true:'selected'}[isSelected(rowKey)]" data-key="60" class="selectable ng-scope">
            <td class="cell value"><span tooltip="60 to 79" class="ng-scope ng-binding">60 to 79</span>
            </td>

            <!--<td >{{table.getRowPercent('current', rowKey) | percent}}</td>-->
            <td class="cell freq ng-binding">24.0%</td>
            <td class="cell glyph">
              <!--<div class="bar bar-both" style="width: {{(row.current.pct * 100)||2}}px; " ></div>-->
              <span class="bar bar-both" ng-style="{width: (table.getBothPct(rowKey) | barSize)+'%' }" style="width: 24.04809619238477%;"></span>
              <span class="bar bar-fg" ng-style="{width: (table.getFgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
              <span class="bar bar-bg" ng-style="{width: (table.getBgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
            </td>
          </tr><!-- end ngRepeat: rowKey in table.rowKeys | orderBy:elementRowSort --><tr ng-repeat="rowKey in table.rowKeys | orderBy:elementRowSort " ng-click="onSelect(rowKey, $event.shiftKey)" ng-class="{true:'selected'}[isSelected(rowKey)]" data-key="80" class="selectable ng-scope">
            <td class="cell value"><span tooltip="80 to 99" class="ng-scope ng-binding">80 to 99</span>
            </td>

            <!--<td >{{table.getRowPercent('current', rowKey) | percent}}</td>-->
            <td class="cell freq ng-binding">6.4%</td>
            <td class="cell glyph">
              <!--<div class="bar bar-both" style="width: {{(row.current.pct * 100)||2}}px; " ></div>-->
              <span class="bar bar-both" ng-style="{width: (table.getBothPct(rowKey) | barSize)+'%' }" style="width: 6.4128256513026045%;"></span>
              <span class="bar bar-fg" ng-style="{width: (table.getFgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
              <span class="bar bar-bg" ng-style="{width: (table.getBgPct(rowKey) | barSize) +'%' }" style="width: 0%;"></span>
            </td>
          </tr><!-- end ngRepeat: rowKey in table.rowKeys | orderBy:elementRowSort -->
          <tr ng-show="getShowMean()" class="">
            <td class="stat">Mean</td>
            <td class="ng-binding">46.1</td>
          </tr>


          </tbody>
        </table>
      </div>


    </div>
  <!-- ngRepeat: field in getChildren(field) -->
</span>
<br/>
<input type="button" id="btnSave" value="Save PNG"/>

<div id="canvas-out"></div>
<img id="imgbase64-out" src="" />
<script>
$(function() { 
    $("#btnSave").click(function() { 
        html2canvas($("#widget"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                document.body.appendChild(canvas);

                // Convert and download as image 
                //Canvas2Image.saveAsPNG(canvas);
                //console.log(canvas.toDataURL());
                $("#canvas-out").append(canvas);
				$('#imgbase64-out').attr('src',canvas.toDataURL())
                // Clean up 
                //document.body.removeChild(canvas);
            }
        });
    });
}); 

</script>