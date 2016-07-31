"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var csv_service_1 = require('./csv-service');
var AppComponent = (function () {
    function AppComponent(_httpCsvService) {
        this._httpCsvService = _httpCsvService;
    }
    AppComponent.prototype.ngOnInit = function () {
        this.loadCsvData();
    };
    AppComponent.prototype.loadCsvData = function () {
        var _this = this;
        this._httpCsvService.getCSVData()
            .subscribe(function (csvData) { return _this.csvDatas = csvData; }, 
        //    function(csvData){ this.csvData = csvData; console.log(this.csvData);},
        function (error) { return alert(); }, function () { return alert(); });
        console.log(this.csvDatas);
    };
    AppComponent = __decorate([
        core_1.Component({
            selector: 'csv-import',
            templateUrl: 'template/csv.html',
            //template:'<ul class="feeds" ><li *ngFor=" let csvData of csvDatas"> {{ csvData[0] }} | {{ csvData[0] }} | {{ csvData[2] }} </li></ul>',
            providers: [csv_service_1.HTTPCsvService]
        }), 
        __metadata('design:paramtypes', [csv_service_1.HTTPCsvService])
    ], AppComponent);
    return AppComponent;
}());
exports.AppComponent = AppComponent;
//# sourceMappingURL=app.component.js.map