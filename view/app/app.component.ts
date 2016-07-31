import {Component} from '@angular/core';
import {HTTPCsvService} from './csv-service';

@Component({
   selector: 'csv-import',
   templateUrl: 'template/csv.html',
   //template:'<ul class="feeds" ><li *ngFor=" let csvData of csvDatas"> {{ csvData[0] }} | {{ csvData[0] }} | {{ csvData[2] }} </li></ul>',
   providers: [HTTPCsvService]
})
export class AppComponent {
    csvDatas: any;

      constructor(private _httpCsvService: HTTPCsvService){  }
      ngOnInit(){
       this.loadCsvData();

      }
      loadCsvData(){
        this._httpCsvService.getCSVData()
            .subscribe(
               csvData =>this.csvDatas =csvData,
          //    function(csvData){ this.csvData = csvData; console.log(this.csvData);},
              error => alert(),
              () => alert(),
            );
              console.log(this.csvDatas);
      }
}
