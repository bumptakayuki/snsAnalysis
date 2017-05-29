//ｰｰｰｰｰｰｰ-------------------
// 通信処理
//ｰｰｰｰｰｰｰ-------------------
import {Injectable} from "@angular/core";
import {RequestOptions, URLSearchParams, Response, RequestOptionsArgs} from "@angular/http";
import {Observable} from  "rxjs/Observable";
import "rxjs/add/operator/map";
import {BuildQueryUtil} from '../util/build-query.util';
import {Http, Headers} from '@angular/http';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class HttpService {


    //Web API URL
    // WEB_API_URL: string = "https://connpass.com/api/v1/event/";

    private WEB_API_URL: string = "/snsAnalysis/public/analysis";

    constructor(
        private http: Http,
        private buildQuery: BuildQueryUtil
    ) {

    }

    // APIからイベント情報取得
    public getEventData(model, page) {

        //接続設定
        let param = this.setData(model);

        // リクエスト実行
        let data = this.requestGet(
            this.WEB_API_URL,
            {
                // page: page,
                // place: model.place,
                // ymd: param.date,
                keyword: 'test',
                // start: model.start
            });

        console.log(data);
        return data;
    }

    //通信設定値作成
    private setData(model) {

        let param = model;


        if (model.date != null) {
            let date = model.date.formatted.replace(/-/, '');
            let date2 = date.replace(/-/, '');
            // param.set("ymd", date2);
            param.date = date2;
        } else {
            // param.set("ymd", '');
            param.date = '';
        }
        return param;
    }

    protected requestGet(url, params?) {
        params = params || {};
        // params.token = this.tokenStorage.getToken();

        //noinspection TypeScriptUnresolvedFunction
        return this.http
            .get(this.buildQuery.convert(url, params))
            .toPromise()
            .then(response => response.json())
            // .catch(this.handleError)
            ;
    }

    //  handleError(error: any) {
    //     let response = error.json();
    //     if (response.error) {
    //         alert(response.error);
    //     }
    //     return Promise.reject(error.message || error);
    // }
}

