@extends('layouts.theam')

@section('title')
    Apply now
@endsection

@section('content')
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Apply now</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Apply now</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="apply-area ptb-100">
        <div class="container">
            <div class="apply-title">
                <h3>Loan Application</h3>
            </div>
            <form class="apply-form" method="POST" action="{{ route('apply_store') }}">
                <div class="row">
                    <div class="col-lg-6">
                        @csrf
                        <div class="form-group">
                            <label>Desired Loan Amount*</label>
                            <input type="number" name="amount" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address*</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address*</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number*</label>
                            <input type="tel" class="form-control" name="phon" required>
                        </div>
                        <div class="form-group">
                            <label>Purpose of Loan*</label>
                            <input type="text" class="form-control" name="purpose" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Annual Income*</label>
                            <input type="number" class="form-control" name="income" required>
                        </div>
                        <div class="form-group">
                            <label>Lastname*</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <div class="select-box">
                                <select class="form-control" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Country*</label>
                            <div class="select-box">
                                <select class="form-control" name="country" required>
                                    <option value="uae">United Arab Emirates</option>
                                    <option value="china">China</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="germany">Germany</option>
                                    <option value="france">France</option>
                                    <option value="japan">Japan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alternative Email Address*</label>
                            <input type="email" class="form-control" name="alternative_email" required>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="company" required>
                        </div>
                        <div class="form-group">
                            <label>Loans Type here</label>
                            <div class="select-box">
                                <select class="form-control" name="type_loans" required>
                                    <option value="5">Agricultural Loan</option>
                                    <option value="1">Business Loan</option>
                                    <option value="2">House Loan</option>
                                    <option value="0">Personal Loan</option>
                                    <option value="3">Education Loan</option>
                                    <option value="4">Payday Loan</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="apply-btn">
                    <button type="submit" class="default-btn">
                        Apply now
                        <span></span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
