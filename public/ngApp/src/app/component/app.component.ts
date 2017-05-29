import {Component} from '@angular/core';
import {OnInit} from '@angular/core';
import {HttpService} from "../service/http.service";
//import {DetailComponent} from './detail.component';
import {ViewContainerRef, ViewChild} from '@angular/core';
import {HostListener} from '@angular/core';
import {Event}    from '../entity/event';
import {empty} from "rxjs/Observer";
import {isEmpty} from "rxjs/operator/isEmpty";

@Component({
    selector: 'app-root',
    templateUrl: './app.component.html',
    styleUrls: [
        '../../vendor/bootstrap/css/bootstrap.min.css',
        './app.component.css',
        './css/AdminLTE.css',
        // './plugins/iCheck/flat/blue.css',
        // './css/skins/all-skins.min.css',
        // './plugins/morris/morris.css',
        // // './plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        // './plugins/datepicker/datepicker3.css',
        // './plugins/daterangepicker/daterangepicker.css',
        // './plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'
    ]
})
export class AppComponent implements OnInit {

    //選択したイベント情報
    private selectedData;

    // イベント情報
    private events;

    private results_returned;

    private results_start;

    public error: any;

    public itemsPerPage: number = 3;

    public currentPage: number = 1;

    private _maxPage: number;

    // デフォルト値
    private places = [
        '東京都', '神奈川県', '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県',
        '北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県',
        '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県',
        '静岡県', '愛知県', '三重県', '滋賀県', '京都府', '大阪府', '兵庫県',
        '奈良県', '和歌山県', '鳥取県', '島根県', '岡山県', '広島県', '山口県',
        '徳島県', '香川県', '愛媛県', '高知県', '福岡県', '佐賀県', '長崎県',
        '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県'
    ];

    // デフォルト値
    private model = new Event(18, 'test', this.places[0], null, false, 0, 'test');

    public existsFlg = true;

    public newEvent() {
        this.model = new Event(42, '', '', null, false, 0);
    }

    //modal 表示用
    viewContainerRef;

    /**
     * コンストラクタ
     *
     * @param httpService
     * @param viewContainerRef
     */
    public constructor(private httpService: HttpService, viewContainerRef: ViewContainerRef) {
        this.viewContainerRef = viewContainerRef;
    }

    /**
     * アプリ起動時の処理
     */
    public ngOnInit() {

    }

    /**
     * イベント検索実行
     *
     * @param integer page
     */
    public onSubmit(page) {

        this.getEvent(this.model, page);

    }

    /**
     * イベント情報の取得
     */
    private getEvent(model, page) {

        this.selectedData = null;
        this.events = null;
        this.existsFlg = true;

        this.model.spinner = true;

        this.httpService.getEventData(model, page)
            .then(response => {
                this.setEvent(response);
                model.requestCount++;
                this.model.spinner = false;
            })
            .catch(error => this.error = error);
    }

    /**
     * イベント情報を設定する
     *
     * @param result
     * @param i
     */
    private setEvent(result) {

        console.log(result);

        //Web APIデータ取得エラー発生時
        if (result.error) {
            alert("Web APIエラー\n" + result.message);
            return;
        }
        this.events = result.events;
        this.results_returned = result.results_returned;
        this.results_start = result.results_start;

        if (this.results_returned != 0) {
            this.existsFlg = true;
        } else {
            this.existsFlg = false;
        }

        //Web APIデータ取得成功時
        // this.areas[i].data = result;
    }


    public range() {
        if (this.events == null) {
            return;
        }

        //this._maxPage = Math.ceil(this.events.length/this.itemsPerPage);
        var ret = [];
        for (var i = 1; i <= 5; i++) {
            ret.push(i);
        }

        return ret;
    };

    public setPage(n) {
        this.currentPage = n;
        this.onSubmit(this.currentPage);
    };

    public prevPage() {
        if (this.currentPage > 1) {
            --this.currentPage;
        }
        this.onSubmit(this.currentPage);
    };

    public nextPage() {
        if (this.currentPage < this._maxPage) {
            ++this.currentPage;
        }
        this.onSubmit(this.currentPage);
    };

    public prevPageDisabled() {
        return this.currentPage === 1 ? "disabled" : "";
    };

    public nextPageDisabled() {
        return this.currentPage === this._maxPage ? "disabled" : "";
    };

}
