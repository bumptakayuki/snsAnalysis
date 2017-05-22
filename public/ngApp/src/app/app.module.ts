import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { AppComponent } from './component/app.component';
import {JsonpModule } from '@angular/http';
import {HttpService} from "./service/http.service";
import {Ng2BootstrapModule} from 'ng2-bootstrap/ng2-bootstrap';
//import {DetailComponent } from './detail.component';
import { BuildQueryUtil } from './util/build-query.util';

import { DatePickerModule } from 'ng2-datepicker/ng2-datepicker';
import * as spinner from 'ng-spin-kit/app/spinners'

@NgModule({
  declarations: [
    AppComponent,
    //DetailComponent,
    spinner.RotatingPlaneComponent,
    spinner.DoubleBounceComponent,
    spinner.WaveComponent,
    spinner.WanderingCubesComponent,
    spinner.PulseComponent,
    spinner.ChasingDotsComponent,
    spinner.CircleComponent,
    spinner.ThreeBounceComponent,
    spinner.CubeGridComponent,
    spinner.WordPressComponent,
    spinner.FadingCircleComponent,
    spinner.FoldingCubeComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    JsonpModule,
    Ng2BootstrapModule,
    DatePickerModule,
    HttpModule

  ],
  providers: [HttpService,BuildQueryUtil],
  bootstrap: [AppComponent]
})
export class AppModule { }
