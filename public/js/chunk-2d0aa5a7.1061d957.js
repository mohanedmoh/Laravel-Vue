(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0aa5a7"],{"113d":function(e,t,a){"use strict";a.r(t);var r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("vue-confirm-dialog"),a("div",{staticClass:"row"},[a("div",{ref:"table",staticClass:"col-md-12"},[a("v-card",[a("v-card-title",[e._v(" Records "),a("v-spacer"),a("v-text-field",{attrs:{"append-icon":"mdi-magnify",label:"Search","single-line":"","hide-details":""},model:{value:e.search,callback:function(t){e.search=t},expression:"search"}})],1),a("v-data-table",{attrs:{headers:e.headers,items:e.records,search:e.search,"item-key":"id"},scopedSlots:e._u([{key:"item.actions",fn:function(t){var r=t.item;return e._l(r.docs,(function(t){return a("a",{key:t,on:{click:function(a){return e.viewImage(t)}}},[a("v-icon",{staticClass:"mr-2",attrs:{color:"blue darken-2"}},[e._v(" fa fa-image ")])],1)}))}}])})],1)],1)]),a("hr",{attrs:{id:"formData"}})],1)},n=[],i=a("0bce"),s={data:function(){return{records:[],search:"",headers:[{text:"ID",align:"start",sortable:!1,value:"id"},{text:"User",value:"user.name"},{text:"Phone",value:"user.phone"},{text:"Plan",value:"plan_name"},{text:"Plot_no",value:"plot_no"},{text:"Created at",value:"created_at"},{text:"Actions",value:"actions",sortable:!1}]}},mounted:function(){this.$store.dispatch(i["a"],[{title:"Requests"},{title:" تسجيل القطع",route:"registration"}])},created:function(){this.fetchRecords()},methods:{fetchRecords:function(){var e=this;this.$ApiService.get("/Registrations").then((function(t){e.records=t.data.data})).catch((function(e){return Vue.$toast.error("".concat(e))}))},viewImage:function(e){window.open(e.url)}}},c=s,o=a("2877"),l=a("6544"),d=a.n(l),u=a("b0af"),f=a("99d9"),h=a("8fea"),v=a("132d"),m=a("2fa4"),p=a("8654"),b=Object(o["a"])(c,r,n,!1,null,null,null);t["default"]=b.exports;d()(b,{VCard:u["a"],VCardTitle:f["b"],VDataTable:h["a"],VIcon:v["a"],VSpacer:m["a"],VTextField:p["a"]})}}]);
//# sourceMappingURL=chunk-2d0aa5a7.1061d957.js.map