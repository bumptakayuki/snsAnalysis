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
var BuildQueryUtil = (function () {
    function BuildQueryUtil() {
    }
    BuildQueryUtil.prototype.convert = function (url, parameters) {
        var qs = '';
        for (var key in parameters) {
            var value = parameters[key];
            qs += encodeURIComponent(key) + '=' + encodeURIComponent(value) + '&';
        }
        if (qs.length > 0) {
            qs = qs.substring(0, qs.length - 1); //chop off last '&'
            url = url + '?' + qs;
        }
        return url;
    };
    BuildQueryUtil = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [])
    ], BuildQueryUtil);
    return BuildQueryUtil;
}());
exports.BuildQueryUtil = BuildQueryUtil;
//# sourceMappingURL=build-query.util.js.map