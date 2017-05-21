import { Injectable } from '@angular/core';

@Injectable()
export class BuildQueryUtil {

    public constructor() {}

    public convert(url: string, parameters: Object)
    {
        let qs: string = '';

        for (var key in parameters) {
            let value: string = parameters[key];
            qs += encodeURIComponent(key) + '=' + encodeURIComponent(value) + '&';
        }

        if (qs.length > 0) {
            qs = qs.substring(0, qs.length - 1); //chop off last '&'
            url = url + '?' + qs;
        }

        return url;
    }

}
