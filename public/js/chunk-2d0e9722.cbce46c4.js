(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0e9722"],{"8e21":function(e,t,a){"use strict";a.r(t);var r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("vue-confirm-dialog"),a("div",{staticClass:"row"},[a("div",{ref:"table",staticClass:"col-md-12"},[a("v-card",[a("v-card-title",[e._v(" Records "),a("v-spacer"),a("v-text-field",{attrs:{"append-icon":"mdi-magnify",label:"Search","single-line":"","hide-details":""},model:{value:e.search,callback:function(t){e.search=t},expression:"search"}})],1),a("v-data-table",{attrs:{headers:e.headers,items:e.records,search:e.search,"item-key":"id"},scopedSlots:e._u([{key:"item.actions",fn:function(t){var r=t.item;return[a("a",{on:{click:function(t){return e.viewImage(r)}}},[a("v-icon",{staticClass:"mr-2",attrs:{color:"blue darken-2"}},[e._v(" fa fa-image ")])],1)]}}])})],1)],1)]),a("hr",{attrs:{id:"formData"}})],1)},n=[],s=a("0bce"),c={data:function(){return{records:[],search:"",headers:[{text:"ID",align:"start",sortable:!1,value:"id"},{text:"User",value:"user.name"},{text:"Phone",value:"user.phone"},{text:"Payment ID",value:"payment_id"},{text:"Created at",value:"created_at"},{text:"Actions",value:"actions",sortable:!1}]}},mounted:function(){this.$store.dispatch(s["a"],[{title:"  Statments",route:"statments"}])},created:function(){this.fetchRecords()},methods:{fetchRecords:function(){var e=this;this.$ApiService.get("/Statments").then((function(t){e.records=t.data.data})).catch((function(e){return Vue.$toast.error("".concat(e))}))},viewImage:function(e){window.open(e.url)}}},i=c,o=a("2877"),d=a("6544"),l=a.n(d),u=a("b0af"),f=a("99d9"),h=a("8fea"),v=a("132d"),m=a("2fa4"),p=a("8654"),b=Object(o["a"])(i,r,n,!1,null,null,null);t["default"]=b.exports;l()(b,{VCard:u["a"],VCardTitle:f["b"],VDataTable:h["a"],VIcon:v["a"],VSpacer:m["a"],VTextField:p["a"]})}}]);
//# sourceMappingURL=chunk-2d0e9722.cbce46c4.js.map