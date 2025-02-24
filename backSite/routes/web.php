<?php

use App\Http\Controllers\Auths\authControllers;
use App\Http\Controllers\Dashboard\dashboardController;
use App\Http\Controllers\Front\frontController;
use Illuminate\Support\Facades\Route;

Route::get("/", [frontController::class, "index"])->name("index");
Route::get("/register", [authControllers::class, "register"])->name("register");
Route::post("/register", [authControllers::class, "registerStore"])->name("registerStore");
Route::get("/login", [authControllers::class, "login"])->name("login");
Route::post("/login", [authControllers::class, 'loginStore'])->name("loginStore");


Route::get("/suivi", [frontController::class, "suivi"])->name("suivi");
Route::get("/immatriculation", [frontController::class, "immatriculation"])->name("immatriculation");
Route::get("/dashboard", [dashboardController::class, "dashboard"])->name("dashboard")->middleware("auth");

// Edit suivi

Route::get("/dashboard/edit/{suivi}", [dashboardController::class, "suiviEdit"])->name("suiviEdit")->middleware("auth");
Route::put("/dashboard/edit/{id}", [dashboardController::class, "suiviEditStore"])->name("suiviEditStore")->middleware("auth");
Route::delete("/dashboar/delete/{projet}", [dashboardController::class, "projectDelete"])->name("projectDelete")->middleware("auth");

// STORE DOSSIER

Route::post("/suivis", [frontController::class, "suviStore"])->name("suviStore")->middleware("auth");
Route::post("/immatriculation", [frontController::class, "immatriculationStrore"])->name("immatriculationStrore")->middleware("auth");
Route::get("/immatriculation/edit/{immatricule}", [dashboardController::class, "immaEdit"])->name("immaEdit")->middleware("auth");
Route::put("/immatriculation/edit/{id}", [dashboardController::class, "immaEditStore"])->name("immaEditStore")->middleware("auth");
Route::delete("/immatriculation/delete/{immatricule}", [dashboardController::class, "immaDelete"])->name("immaDelete")->middleware("auth");
Route::post("/logout", [dashboardController::class, "logout"])->name("logout");

