<template>
    <div id="excomponent">
        <body class="login-page bg-body-secondary">
            <div class="login-box">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <a
                            href="../index2.html"
                            class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover"
                        >
                            <h1 class="mb-0"><b>Admin</b>LTE</h1>
                        </a>
                    </div>
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">
                            Sign in to start your session
                        </p>
                        <form action="../index3.html" method="post">
                            <div class="input-group mb-1">
                                <div class="form-floating">
                                    <input
                                        id="loginEmail"
                                        type="email"
                                        class="form-control"
                                        value=""
                                        placeholder=""
                                    />
                                    <label for="loginEmail">Email</label>
                                </div>
                                <div class="input-group-text">
                                    <span class="bi bi-envelope"></span>
                                </div>
                            </div>
                            <div class="input-group mb-1">
                                <div class="form-floating">
                                    <input
                                        id="loginPassword"
                                        type="password"
                                        class="form-control"
                                        placeholder=""
                                    />
                                    <label for="loginPassword">Password</label>
                                </div>
                                <div class="input-group-text">
                                    <span class="bi bi-lock-fill"></span>
                                </div>
                            </div>
                            <!--begin::Row-->
                            <div class="row">
                                <div
                                    class="col-8 d-inline-flex align-items-center"
                                >
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="flexCheckDefault"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="flexCheckDefault"
                                        >
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <div class="d-grid gap-2">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Sign In
                                        </button>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!--end::Row-->
                        </form>
                        <div
                            class="social-auth-links text-center mb-3 d-grid gap-2"
                        >
                            <p>- OR -</p>
                            <a href="#" class="btn btn-primary">
                                <i class="bi bi-facebook me-2"></i> Sign in
                                using Facebook
                            </a>
                            <a href="#" class="btn btn-danger">
                                <i class="bi bi-google me-2"></i> Sign in using
                                Google+
                            </a>
                        </div>
                        <!-- /.social-auth-links -->
                        <p class="mb-1">
                            <a href="forgot-password.html"
                                >I forgot my password</a
                            >
                        </p>
                        <p class="mb-0">
                          <RouterLink to="/register">Register a new membership</RouterLink>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </body>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
