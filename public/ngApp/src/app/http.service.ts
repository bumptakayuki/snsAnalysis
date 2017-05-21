//ｰｰｰｰｰｰｰ-------------------
// 通信処理
//ｰｰｰｰｰｰｰ-------------------
import {Injectable} from "@angular/core";
import {RequestOptions, URLSearchParams, Jsonp, Response, RequestOptionsArgs} from "@angular/http";
import {Observable} from  "rxjs/Observable";
import "rxjs/add/operator/map";
// import { AuthTokenStorage } from '../storage/auth-token.storage';
import { BuildQueryUtil } from './util/build-query.util';
import { Http, Headers } from '@angular/http';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class HttpService {


    //Web API URL
    // WEB_API_URL: string = "https://connpass.com/api/v1/event/";
    //
    WEB_API_URL:string = "/snsAnalysis/public/events";
    CALLBACK = "JSONP_CALLBACK";

    constructor(
        private jsonp:Jsonp,
        private http: Http,
        // protected tokenStorage: AuthTokenStorage,
        private buildQuery: BuildQueryUtil
    ) {
    }

    // APIからイベント情報取得
    getEventData(model,page){

        //接続設定
        let param = this.setParam(model,page);


        let data = this.requestGet(
            this.WEB_API_URL,
            {
                page: page,
                place: param.get("place"),
                ymd: param.get("ymd"),
                keyword: param.get("keyword"),
                start: param.get("start")
            });

        return data;
    }

    //通信設定値作成
    setParam(model,page) {

        //Urlパラメータオブジェクト作成
        let param = new URLSearchParams();
        param.set("keyword", model.name);

        if(model.date!=null){
            let date = model.date.formatted.replace(/-/, '');
            let date2 = date.replace(/-/, '');
            param.set("ymd", date2);
        }else{
            param.set("ymd", '');
        }
        param.set("place", model.place);
        param.set("format", "jsonp");
        param.set("start", page);

        //param.set("callback", this.CALLBACK);
        param.set('callback', '__ng_jsonp__.__req'+model.requestCount+'.finished');

        //通信設定オブジェクト作成
        let options:RequestOptionsArgs = {
            method: "get",
            url: this.WEB_API_URL,
            search: param,

        };
        return param;
    }

    protected requestPost(url, data, params?)
    {
        params = params || {};
        // params.token = this.tokenStorage.getToken();

        let headers = new Headers();
        headers.append('Content-Type', 'application/json');

        //noinspection TypeScriptUnresolvedFunction
        return this.http
            .post(this.buildQuery.convert(url, params), JSON.stringify(data), {headers: headers})
            .toPromise()
            .then(response => response.json())
            .catch(this.handleError);
    }

    protected requestGet(url, params?)
    {
        params = params || {};
        // params.token = this.tokenStorage.getToken();

        //noinspection TypeScriptUnresolvedFunction
        return this.http
            .get(this.buildQuery.convert(url, params))
            .toPromise()
            .then(response => response.json())
            .catch(this.handleError);
    }

    private handleError(error: any)
    {
        let response = error.json();
        if (response.error) {
            alert(response.error);
        }

        return Promise.reject(error.message || error);
    }
}

