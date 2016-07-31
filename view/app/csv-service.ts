import {Injectable} from '@angular/core';
import {Http, Response} from '@angular/http';
import 'rxjs/Rx';
@Injectable()
export class HTTPCsvService {
  constructor(private _http:Http){

  }
  getCSVData(){
    return this._http.get('http://localhost/develop/dev-test/controller/CSVImport.php')
       .map((res: Response) => res.json());
  }
}
