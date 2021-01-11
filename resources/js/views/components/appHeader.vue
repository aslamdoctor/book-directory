<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <router-link to="/" class="navbar-brand">Book Directory</router-link>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <router-link
                        class="nav-link"
                        to="/"
                        exact-active-class="active"
                        >Home</router-link
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdown01"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Categories</a
                    >
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#"
                            >Something else here</a
                        >
                    </div>
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link"
                        to="/authors"
                        exact-active-class="active"
                        >Authors</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link"
                        to="/publishers"
                        exact-active-class="active"
                        >Publishers</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link"
                        to="/about"
                        exact-active-class="active"
                        >About Us</router-link
                    >
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input
                    class="form-control mr-sm-2"
                    type="text"
                    placeholder="Search"
                    aria-label="Search"
                />
                <button
                    class="btn btn-outline-success my-2 my-sm-0"
                    type="submit"
                >
                    Search
                </button>
            </form>
        </div>
    </nav>
</template>
