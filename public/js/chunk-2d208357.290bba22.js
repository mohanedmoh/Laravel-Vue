(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d208357"],{a48f:function(e,t,a){"use strict";a.r(t);var r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("vue-confirm-dialog"),a("div",{staticClass:"row"},[a("div",{ref:"table",staticClass:"col-md-12"},[a("v-card",[a("v-card-title",[e._v(" Records "),a("v-spacer"),a("v-text-field",{attrs:{"append-icon":"mdi-magnify",label:"Search","single-line":"","hide-details":""},model:{value:e.search,callback:function(t){e.search=t},expression:"search"}})],1),a("v-data-table",{attrs:{headers:e.headers,items:e.records,search:e.search,"item-key":"id"}})],1)],1)]),a("hr",{attrs:{id:"formData"}})],1)},s=[],n=a("0bce"),c={data:function(){return{records:[],search:"",headers:[{text:"ID",align:"start",sortable:!1,value:"id"},{text:"User",value:"user.name"},{text:"Phone",value:"user.phone"},{text:"Plan",value:"plan_name"},{text:"Plot_no",value:"plot.plot_no"},{text:"Created at",value:"created_at"},{text:"Actions",value:"actions",sortable:!1}]}},mounted:function(){this.$store.dispatch(n["a"],[{title:"Requests"},{title:"إعادة العرض",route:"resell"}])},created:function(){this.fetchRecords()},methods:{fetchRecords:function(){var e=this;this.$ApiService.get("/Resell").then((function(t){e.records=t.data.data})).catch((function(e){return Vue.$toast.error("".concat(e))}))},viewImage:function(e){window.open(e.url)}}},i=c,l=a("2877"),o=a("6544"),d=a.n(o),u=a("b0af"),h=a("99d9"),f=a("8fea"),v=a("2fa4"),p=a("8654"),m=Object(l["a"])(i,r,s,!1,null,null,null);t["default"]=m.exports;d()(m,{VCard:u["a"],VCardTitle:h["b"],VDataTable:f["a"],VSpacer:v["a"],VTextField:p["a"]})}}]);
//# sourceMappingURL=chunk-2d208357.290bba22.js.map