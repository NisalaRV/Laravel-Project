<template>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <Link class="navbar-brand" href="/">Home</Link>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <Link
              class="nav-link active"
              aria-current="page"
              :href="route('student')"
            > Get Start </Link>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div class="d-flex">
          <template v-if="authStatus">
            <!-- If authenticated, show logout button -->
            <button @click="logout" class="btn btn-secondary mx-2">Logout</button>
          </template>
          <template v-else>
            <!-- If not authenticated, show login and registration buttons -->
            <Link class="btn btn-primary mx-2" :href="route('login')">Login</Link>
            <Link class="btn btn-primary mx-2" :href="route('register')">Registration</Link>
          </template>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
  components: {
    Link,
  },
  data() {
    return {
      authStatus:true ,
    };
  },
  methods: {
    logout() {

      this.authStatus =false;
    },
  },
};
</script>




<style scoped>

    .navbar {
      background-color: #171717;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .navbar-brand:hover {
      color: #99aa81;
    }

    .navbar-nav .nav-link {
      color: #fff;
    }

    .navbar-nav .nav-link:hover {
      color: #99aa81;
    }

    /* Styling for login and registration buttons */
    .btn-primary,
    .btn-secondary {
      transition: all 0.3s ease; /* Add smooth transition for hover effects */
    }

    .btn-primary {
      background-color: #2E2E2E;
      border-color: #fff;
      color: #fff;
    }

    .btn-primary:hover {
      background-color: #fff;
      color: #2E2E2E;
    }

    .btn-secondary {
      background-color: #fff;
      color: #2E2E2E;
    }

    .btn-secondary:hover {
        background-color: #2E2E2E;
      border-color: #fff;
      color: #fff;
    }


</style>
