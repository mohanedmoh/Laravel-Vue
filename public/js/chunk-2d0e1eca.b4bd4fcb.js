(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0e1eca"],{"7d07":function(t,e,a){"use strict";a.r(e);var r=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("vue-confirm-dialog"),a("div",{staticClass:"row"},[a("div",{ref:"table",staticClass:"col-md-12"},[a("v-card",[a("v-card-title",[t._v(" Records "),a("v-spacer"),a("v-text-field",{attrs:{"append-icon":"mdi-magnify",label:"Search","single-line":"","hide-details":""},model:{value:t.search,callback:function(e){t.search=e},expression:"search"}}),a("v-spacer")],1),a("v-data-table",{attrs:{headers:t.headers,items:t.records,search:t.search,"item-key":"id"},scopedSlots:t._u([{key:"item.status_id",fn:function(e){var r=e.item;return[a("td",{staticClass:"text-right"},[1==r.status_id?a("span",{staticClass:"label label-lg label-light-warning label-inline"},[t._v(" Pendding ")]):t._e(),2==r.status_id?a("span",{staticClass:"label label-lg label-light-success label-inline"},[t._v(" Finished ")]):t._e()])]}},{key:"item.actions",fn:function(e){var r=e.item;return[a("b-button",{staticClass:"mx-1",attrs:{title:"Mark as done",pill:""},on:{click:function(e){return t.finish(r)}}},[a("v-icon",{attrs:{small:""}},[t._v("fa fa-check")])],1),2==t.role_id?a("b-button",{directives:[{name:"scroll-to",rawName:"v-scroll-to",value:"#formData",expression:"'#formData'"}],staticClass:"mx-1",attrs:{title:"Assign to an employee",pill:""},on:{click:function(e){return t.assign(r)}}},[a("v-icon",{attrs:{small:""}},[t._v("fa fa-user-plus")])],1):t._e()]}}])})],1)],1)]),a("hr"),a("div",{staticClass:"row"},[2==t.role_id?a("div",{staticClass:"col-md-12",attrs:{id:"formData"}},[a("v-card",[a("v-card-title",[t._v("Fill in Form Data")]),a("v-card-text",[a("validation-observer",{ref:"observer",scopedSlots:t._u([{key:"default",fn:function(e){var r=e.handleSubmit;return[a("b-form",{attrs:{enctype:"multipart/form-data"},on:{submit:function(e){return e.stopPropagation(),e.preventDefault(),r(t.saveEmp)}}},[a("validation-provider",{attrs:{name:"Request ID",rules:"required"},scopedSlots:t._u([{key:"default",fn:function(e){return[a("b-form-group",{attrs:{label:"Request ID"}},[a("b-form-input",{attrs:{readonly:"",state:t.getValidationState(e),"aria-describedby":"input-1-live-feedback"},model:{value:t.form.req_id,callback:function(e){t.$set(t.form,"req_id",e)},expression:"form.req_id"}}),a("b-form-invalid-feedback",{attrs:{id:"input-1-live-feedback"}},[t._v(" "+t._s(e.errors[0])+" ")])],1)]}}],null,!0)}),a("validation-provider",{attrs:{name:"Name",rules:"required"},scopedSlots:t._u([{key:"default",fn:function(e){return[a("b-form-group",{attrs:{label:"Employee Name"}},[a("b-form-select",{staticClass:"mb-3",attrs:{options:t.staff,state:t.getValidationState(e),"aria-describedby":"name"},scopedSlots:t._u([{key:"first",fn:function(){return[a("b-form-select-option",{attrs:{value:null}},[t._v("-- Please select an option --")])]},proxy:!0}],null,!0),model:{value:t.form.emp_id,callback:function(e){t.$set(t.form,"emp_id",e)},expression:"form.emp_id"}}),a("b-form-invalid-feedback",{attrs:{id:"name"}},[t._v(" "+t._s(e.errors[0])+" ")])],1)]}}],null,!0)}),a("b-button",{attrs:{type:"submit",variant:"success"}},[t._v("Save")]),a("b-button",{staticClass:"ml-2",attrs:{variant:"warning"},on:{click:function(e){return t.resetForm()}}},[t._v("Reset")])],1)]}}],null,!1,513121426)})],1)],1)],1):t._e()])],1)},s=[],n=a("2b0e"),i=a("0bce"),o={mounted:function(){var t=this;this.$store.dispatch(i["a"],[{title:"Requests"},{title:" طلبات التواصل ",route:"landContact"}]),this.$ApiService.get("/getUser").then((function(e){t.role_id=e.data.data.role_id})).catch((function(t){}))},data:function(){return{role_id:1,records:[],staff:[],edit:!1,record_id:"",form:{emp_id:null,req_id:null},search:"",headers:[{text:"ID",align:"start",sortable:!1,value:"id"},{text:"Plan",value:"plan.name"},{text:"Plot NO",value:"plot.plot_no"},{text:"Name",value:"title"},{text:"Message",value:"description"},{text:"User",value:"user.name"},{text:"Assigned to",value:"employee.employee_name"},{text:"Date",value:"created_at"},{text:"Status",value:"status_id",sortable:!1},{text:"Actions",value:"actions",sortable:!1}]}},getStatus:function(t){return 1==t?"Pendding":"Finished"},created:function(){this.fetchRecords(),this.fetchStaff()},methods:{getValidationState:function(t){var e=t.dirty,a=t.validated,r=t.valid,s=void 0===r?null:r;return e||a?s:null},resetForm:function(){var t=this;this.form={req_id:null,emp_id:null},this.$nextTick((function(){t.$refs.observer.reset()}))},fetchRecords:function(){var t=this;this.$ApiService.get("/LandContact").then((function(e){t.records=e.data.data})).catch((function(t){n["default"].$toast.error("".concat(t)),console.log(t)}))},fetchStaff:function(){var t=this;this.$ApiService.get("/Staff").then((function(e){t.staff=e.data.data})).catch((function(t){n["default"].$toast.error("".concat(t)),console.log(t)}))},deleteItem:function(t){var e=this;this.$confirm({title:"Confirmation",message:"Are you sure you want to proceed?",button:{no:"No",yes:"Yes"},callback:function(a){a&&e.$ApiService.delete("/Feedback/".concat(t.id)).then((function(t){1==t.data.error?(e.$refs.table.scrollIntoView(),e.fetchRecords(),n["default"].$toast.success("".concat(t.data.result))):n["default"].$toast.error("".concat(t.data.result))})).catch((function(t){return n["default"].$toast.error("".concat(t))}))}})},assign:function(t){this.form.req_id=t.id},saveEmp:function(){var t=this;this.$ApiService.put("/LandContactAssign",this.form).then((function(e){1==e.data.error?(t.resetForm(),t.record_id="",t.$refs.table.scrollIntoView(),t.fetchRecords(),n["default"].$toast.success("".concat(e.data.result))):n["default"].$toast.error("".concat(e.data.result))})).catch((function(t){return n["default"].$toast.error("".concat(t))}))},finish:function(t){var e=this;this.$confirm({title:"Confirmation",message:"Are you sure you want to mark this as done ?",button:{no:"No",yes:"Yes"},callback:function(a){a&&e.$ApiService.put("/landContactFinish/".concat(t.id)).then((function(t){1==t.data.error?(e.$refs.table.scrollIntoView(),e.fetchRecords(),n["default"].$toast.success("".concat(t.data.result))):n["default"].$toast.error("".concat(t.data.result))})).catch((function(t){n["default"].$toast.error("Some error happened, please try again!"),console.log(t)}))}})}}},l=o,c=a("2877"),d=a("6544"),u=a.n(d),f=a("b0af"),m=a("99d9"),v=a("8fea"),p=a("132d"),h=a("2fa4"),b=a("8654"),_=Object(c["a"])(l,r,s,!1,null,null,null);e["default"]=_.exports;u()(_,{VCard:f["a"],VCardText:m["a"],VCardTitle:m["b"],VDataTable:v["a"],VIcon:p["a"],VSpacer:h["a"],VTextField:b["a"]})}}]);
//# sourceMappingURL=chunk-2d0e1eca.b4bd4fcb.js.map