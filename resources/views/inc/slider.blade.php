 <div class="fh5co-hero">
            <div class="fh5co-overlay">                    @include('inc.banner')
</div>
            <div class="fh5co-cover" data-stellar-background-ratio="0.5" >
                
                <div class="desc">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5 col-md-5">
                                <div class="tabulation animate-box">

                                  <!-- Nav tabs -->
                                   <ul class="nav nav-tabs" role="tablist">
                                      <li role="presentation" class="active">
                                        <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
                                      </li>
                                      <li role="presentation">
                                           <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
                                      </li>
                                      <li role="presentation">
                                           <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Cars</a>
                                      </li>
                                       <li role="presentation">
                                           <a href="#bus" aria-controls="bus" role="tab" data-toggle="tab">Bus</a>
                                      </li>
                                   </ul>

                                   <!-- Tab panes -->
                                    <div class="tab-content">
                                     <div role="tabpanel" class="tab-pane active" id="flights">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">From:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">To:</label>
                                                    <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Check In:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Check Out:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Class:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>Economy</option>
                                                        <option value="economy">Economy</option>
                                                        <option value="first">First</option>
                                                        <option value="business">Business</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adult:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Children:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Flight">
                                            </div>
                                        </div>
                                     </div>
                                     <div role="tabpanel" class="tab-pane" id="Bus">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-12 mt">
                                                <div class="input-field">
                                                    <label for="from">City:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Return:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Check Out:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">chair:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="economy">1</option>
                                                        <option value="first">2</option>
                                                        <option value="business">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adult:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Children:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
                                            </div>
                                        </div>
                                     </div>
                                     <div role="tabpanel" class="tab-pane" id="hotels">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-12 mt">
                                                <div class="input-field">
                                                    <label for="from">City:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Return:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Check Out:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Rooms:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="economy">1</option>
                                                        <option value="first">2</option>
                                                        <option value="business">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adult:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Children:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
                                            </div>
                                        </div>
                                     </div>

                                     <div role="tabpanel" class="tab-pane" id="packages">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">City:</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Destination:</label>
                                                    <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Departs:</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Return:</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Rooms:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="economy">1</option>
                                                        <option value="first">2</option>
                                                        <option value="business">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adult:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Children:</label>
                                                    <select class="cs-select cs-skin-border">
                                                        <option value="" disabled selected>1</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Packages">
                                            </div>
                                        </div>
                                     </div>
                                    </div>

                                </div>
                            </div>
    
                        </div>

                    </div>

                </div>

            </div>

        </div>