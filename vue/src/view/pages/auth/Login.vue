<template>
  <div>
    <vue-confirm-dialog></vue-confirm-dialog>
    <!--begin::Content header-->
    <div
      class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10"
    >
    
    </div>
    <!--end::Content header-->

    <!--begin::Signin-->
    <div class="login-form login-signin">
      <div class="text-center mb-10 mb-lg-20">
        <h3 class="font-size-h1">Sign In</h3>
        <p class="text-muted font-weight-semi-bold">
          Enter your email and password
        </p>
      </div>

      <!--begin::Form-->
      <b-form class="form" @submit.stop.prevent="onSubmit">
       

        <div
          role="alert"
          v-bind:class="{ show: errors.length }"
          class="alert fade alert-danger"
        >
          <div class="alert-text" v-for="(error, i) in errors" :key="i">
            {{ error }}
          </div>
        </div>

        <b-form-group
          id="example-input-group-1"
          label=""
          label-for="example-input-1"
        >
          <b-form-input
            class="form-control form-control-solid h-auto py-5 px-6"
            id="example-input-1"
            name="example-input-1"
            placeholder="Email"
            v-model="$v.form.email.$model"
            :state="validateState('email')"
            aria-describedby="input-1-live-feedback"
          ></b-form-input>

          <b-form-invalid-feedback id="input-1-live-feedback">
            Email is required and a valid email address.
          </b-form-invalid-feedback>
        </b-form-group>

        <b-form-group
          id="example-input-group-2"
          label=""
          label-for="example-input-2"
        >
          <b-form-input
            class="form-control form-control-solid h-auto py-5 px-6"
            type="password"
            id="example-input-2"
            name="example-input-2"
            placeholder="Password"
            v-model="$v.form.password.$model"
            :state="validateState('password')"
            aria-describedby="input-2-live-feedback"
          ></b-form-input>

          <b-form-invalid-feedback id="input-2-live-feedback">
            Password is required.
          </b-form-invalid-feedback>
        </b-form-group>

        <!--begin::Action-->
        <div
          class="form-group d-flex flex-wrap justify-content-between align-items-center"
        >
         
          <button
            ref="kt_login_signin_submit"
            class="btn btn-primary font-weight-bold px-9 py-4 my-3 font-size-3"
          >
            Sign In
          </button>
        </div>
        <!--end::Action-->
      </b-form>
      <!--end::Form-->
    </div>
    <!--end::Signin-->
  </div>
</template>

<style lang="scss" scoped>
.spinner.spinner-right {
  padding-right: 3.5rem !important;
}
</style>

<script>
import { mapState } from "vuex";
import { LOGIN, LOGOUT } from "@/core/services/store/auth.module";

import { validationMixin } from "vuelidate";
import { email, minLength, required } from "vuelidate/lib/validators";
import Vue from "vue";
export default {
  mixins: [validationMixin],
  name: "login",
  data() {
    return {
      // Remove this dummy login info
      form: {
        email: null,
        password: null,
      },
    };
  },
  validations: {
    form: {
      email: {
        required,
        email,
      },
      password: {
        required,
        minLength: minLength(3),
      },
    },
  },
  methods: {
    validateState(name) {
      const { $dirty, $error } = this.$v.form[name];
      return $dirty ? !$error : null;
    },
    resetForm() {
      this.form = {
        email: null,
        password: null,
      };

      this.$nextTick(() => {
        this.$v.$reset();
      });
    },
    onSubmit() {
      this.$v.form.$touch();
      if (this.$v.form.$anyError) {
        return;
      }

      const email = this.$v.form.email.$model;
      const password = this.$v.form.password.$model;

      // clear existing errors
      this.$store.dispatch(LOGOUT);

      // set spinner to submit button
      const submitButton = this.$refs["kt_login_signin_submit"];
      submitButton.classList.add("spinner", "spinner-light", "spinner-right");

      this.$ApiService
        .post("/login", { email, password })
        .then((response) => {
          if (response.data.error == 1) {
            //console.log(response.data.data.token);
            window.localStorage.setItem("id_token", response.data.data.token);
            //console.log("TOKEN FROM STORAGE="+window.localStorage.getItem("id_token")) ;

            //this.makeToast("success", `${response.data.result}`);
            this.$store
              .dispatch(LOGIN, { email, password })
              // go to which page after successfully login
              .then(() => this.$router.push({ name: "users" }));
          } else {
            Vue.$toast.error(`${response.data.result}`);
          }
        })
        .catch((err) => Vue.$toast.error(`${response.data.result}`));

      // dummy delay
      setTimeout(() => {
        // send login request

        submitButton.classList.remove(
          "spinner",
          "spinner-light",
          "spinner-right"
        );
      }, 2000);
    },
  },
  computed: {
    ...mapState({
      errors: (state) => state.auth.errors,
    }),
  },
};
</script>
