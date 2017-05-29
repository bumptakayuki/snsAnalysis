import './polyfills.ts';

import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { enableProdMode } from '@angular/core';
import { environment } from './environments/environment';
import { AppModule } from './app/app.module';

// import { jQuery } from '../node_module/jquery';

import 'jquery';

// import 'bootstrap-loader';
// import 'font-awesome-sass-loader';
import 'lodash';

if (environment.production) {
  enableProdMode();
}

platformBrowserDynamic().bootstrapModule(AppModule);
