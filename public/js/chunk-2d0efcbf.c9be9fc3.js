(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0efcbf"],{"9a45":function(e,t,a){"use strict";a.r(t);var r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("vue-confirm-dialog"),a("div",{staticClass:"row"},[a("div",{ref:"table",staticClass:"col-md-12"},[a("v-card",[a("v-card-title",[e._v(" Records "),a("v-spacer"),a("v-text-field",{attrs:{"append-icon":"mdi-magnify",label:"Search","single-line":"","hide-details":""},model:{value:e.search,callback:function(t){e.search=t},expression:"search"}})],1),a("v-data-table",{attrs:{headers:e.headers,items:e.records,search:e.search,"item-key":"id"}})],1)],1)]),a("hr",{attrs:{id:"formData"}})],1)},s=[],c=a("0bce"),n={data:function(){return{records:[],search:"",headers:[{text:"ID",align:"start",sortable:!1,value:"id"},{text:"User",value:"user.name"},{text:"Phone",value:"user.phone"},{text:"Plan",value:"plan.name"},{text:"Plot_no",value:"plot.plot_no"},{text:"To Date",value:"to_date"},{text:"Created at",value:"created_at"},{text:"Actions",value:"actions",sortable:!1}]}},mounted:function(){this.$store.dispatch(c["a"],[{title:"Requests"},{title:"  حجز القطع",route:"reservation"}])},created:function(){this.fetchRecords()},methods:{fetchRecords:function(){var e=this;this.$ApiService.get("/Reservations").then((function(t){e.records=t.data.data})).catch((function(e){return Vue.$toast.error("".concat(e))}))}}},i=n,o=a("2877"),l=a("6544"),d=a.n(l),u=a("b0af"),h=a("99d9"),v=a("8fea"),f=a("2fa4"),p=a("8654"),b=Object(o["a"])(i,r,s,!1,null,null,null);t["default"]=b.exports;d()(b,{VCard:u["a"],VCardTitle:h["b"],VDataTable:v["a"],VSpacer:f["a"],VTextField:p["a"]})}}]);
//# sourceMappingURL=chunk-2d0efcbf.c9be9fc3.js.map