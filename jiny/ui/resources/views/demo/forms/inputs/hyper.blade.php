<x-theme theme="adminkit" class="bootstrap">
    
<div class="container-fluid">
                        


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Input Types</h4>
                    <p class="text-muted font-14">
                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                    </p>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Floating labels</h4>
                    <p class="text-muted font-14">
                        Wrap a pair of <code>&lt;input class="form-control"&gt;</code> and <code>&lt;label&gt;</code> elements in <code>.form-floating</code> to enable floating labels with Bootstrap’s textual form fields. A <code>placeholder</code> is required on each <code>&lt;input&gt;</code> as our method of CSS-only floating labels uses the <code>:placeholder-shown</code> pseudo-element. Also note that the <code>&lt;input&gt;</code> must come first so we can utilize a sibling selector (e.g., <code>~</code>).
                    </p>
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#floating-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#floating-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->

                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="mb-3">Example</h5>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                            
                                    <h5 class="mb-3 mt-4">Textareas</h5>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                                        <label for="floatingTextarea">Comments</label>
                                    </div>
                                </div>
                            
                                <div class="col-lg-6">
                                    <h5 class="mb-3">Selects</h5>
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelect">Works with selects</label>
                                    </div>
                            
                                    <h5 class="mb-3 mt-4">Layout</h5>
                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                                                <label for="floatingInputGrid">Email address</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <label for="floatingSelectGrid">Works with selects</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="floating-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml">          <br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-floating mb-3"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"floatingInput"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"name@example.com"</span> /&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"floatingInput"</span>&gt;</span>Email address<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-floating"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"password"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"floatingPassword"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Password"</span> /&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"floatingPassword"</span>&gt;</span>Password<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-floating"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Leave a comment here"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"floatingTextarea"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"height: 100px;"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"floatingTextarea"</span>&gt;</span>Comments<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-floating"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-select"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"floatingSelect"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Floating label select example"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>&gt;</span>Open this select menu<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"floatingSelect"</span>&gt;</span>Works with selects<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row g-2"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-md"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-floating"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"floatingInputGrid"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"name@example.com"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"mdo@example.com"</span> /&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"floatingInputGrid"</span>&gt;</span>Email address<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-md"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-floating"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-select"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"floatingSelectGrid"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Floating label select example"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>&gt;</span>Open this select menu<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"floatingSelectGrid"</span>&gt;</span>Works with selects<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="header-title">Select</h4>
                            <p class="text-muted font-14">
                                <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to trigger the custom styles.
                            </p>

                            <ul class="nav nav-tabs nav-bordered mb-3">
                                <li class="nav-item">
                                    <a href="#form-select-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Preview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#form-select-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                        Code
                                    </a>
                                </li>
                            </ul> <!-- end nav-->
                            <div class="tab-content">
                                <div class="tab-pane show active" id="form-select-preview">
                                    <select class="form-select mb-3">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>     
                                    <select class="form-select form-select-lg mb-3">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="form-select form-select-sm mb-3">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select> 
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected="">Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>   
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                            <option selected="">Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                    </div>                                
                                </div> <!-- end preview-->
                            
                                <div class="tab-pane" id="form-select-code">
                                    <pre class="mb-0">                                                            <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-select mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>&gt;</span>Open this select menu<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>     <br><span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-select form-select-lg mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>&gt;</span>Open this select menu<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-select form-select-sm mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>&gt;</span>Open this select menu<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span> <br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group-text"</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"inputGroupSelect01"</span>&gt;</span>Options<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-select"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"inputGroupSelect01"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>&gt;</span>Choose...<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>   <br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-select"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"inputGroupSelect04"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Example select with button addon"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">selected</span>&gt;</span>Choose...<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"1"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"2"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"3"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"btn btn-outline-secondary"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span>&gt;</span>Button<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                                    </pre> <!-- end highlight-->
                                </div> <!-- end preview code-->
                            </div> <!-- end tab-content-->

                        </div> <!-- end col -->

                      
                    </div> <!-- end row -->

                </div> <!-- end card-body-->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->



    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Input Sizes</h4>
                    <p class="text-muted font-14">
                        Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#input-sizes-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#input-sizes-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="input-sizes-preview">
                            <form>
                                <div class="mb-3">
                                    <label for="example-input-small" class="form-label">Small</label>
                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                </div>

                                <div class="mb-3">
                                    <label for="example-input-normal" class="form-label">Normal</label>
                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                </div>

                                <div class="mb-3">
                                    <label for="example-input-large" class="form-label">Large</label>
                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                </div>

                                <div class="mb-2">
                                    <label for="example-gridsize" class="form-label">Grid Sizes</label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="text" id="example-gridsize" class="form-control" placeholder=".col-sm-4">
                                        </div>
                                    </div>
                                </div>
                            </form>                                           
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="input-sizes-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"example-input-small"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Small<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"example-input-small"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"example-input-small"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control form-control-sm"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">".input-sm"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"example-input-normal"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Normal<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"example-input-normal"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"example-input-normal"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Normal"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"example-input-large"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Large<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"example-input-large"</span> <span class="hljs-attr">name</span>=<span class="hljs-string">"example-input-large"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control form-control-lg"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">".input-lg"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-2"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"example-gridsize"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Grid Sizes<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-4"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"example-gridsize"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">".col-sm-4"</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Input Group</h4>
                    <p class="text-muted font-14">
                        Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#input-group-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#input-group-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="input-group-preview">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Static</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Dropdowns</label>
                                    <div class="input-group">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Buttons</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                        <button class="btn btn-dark" type="button">Button</button>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <label class="form-label">File input</label>
                                        <input class="form-control" type="file" id="inputGroupFile04">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="formFileMultiple01" class="form-label">Multiple files input</label>
                                        <input class="form-control" type="file" id="formFileMultiple01" multiple="">
                                    </div>
                                </div>
                            </form>                                           
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="input-group-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Static<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group flex-nowrap"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group-text"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"basic-addon1"</span>&gt;</span>@<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Username"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Username"</span> <span class="hljs-attr">aria-describedby</span>=<span class="hljs-string">"basic-addon1"</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>                <br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Dropdowns<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"btn btn-primary dropdown-toggle"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span> <span class="hljs-attr">data-bs-toggle</span>=<span class="hljs-string">"dropdown"</span> <span class="hljs-attr">aria-haspopup</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">aria-expanded</span>=<span class="hljs-string">"false"</span>&gt;</span>Dropdown<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-menu"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-item"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Action<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-item"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Another action<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dropdown-item"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#"</span>&gt;</span>Something else here<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">""</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">""</span> <span class="hljs-attr">aria-describedby</span>=<span class="hljs-string">"basic-addon1"</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>                <br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Buttons<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Recipient's username"</span> <span class="hljs-attr">aria-label</span>=<span class="hljs-string">"Recipient's username"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"btn btn-dark"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"button"</span>&gt;</span>Button<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>                <br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row g-2"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-6"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>File input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"inputGroupFile04"</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-6"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"formFileMultiple"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Multiple files input<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"file"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"formFileMultiple"</span> <span class="hljs-attr">multiple</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->







    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Horizontal form label sizing</h4>
                    <p class="text-muted font-14">Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
    
                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#label-sizing-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#label-sizing-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="label-sizing-preview">
                            <form>
                                <div class="mb-2 row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                    </div>
                                </div>
                            </form>                                        
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="label-sizing-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">form</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-2 row"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"colFormLabelSm"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-2 col-form-label col-form-label-sm"</span>&gt;</span>Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-10"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control form-control-sm"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"colFormLabelSm"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"col-form-label-sm"</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-2 row"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"colFormLabel"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-2 col-form-label"</span>&gt;</span>Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-10"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"colFormLabel"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"col-form-label"</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"colFormLabelLg"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-2 col-form-label col-form-label-lg"</span>&gt;</span>Email<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-10"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"email"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control form-control-lg"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"colFormLabelLg"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"col-form-label-lg"</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->


    
</div>




<div class="container-fluid">
    



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Select2</h4>
                    <p class="text-muted font-14">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#select2-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#select2-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="select2-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    </div> <!-- end col -->
                            </div> <!-- end row -->                                           
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="select2-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-comment">&lt;!-- Single Select --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control select2"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"select2"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">option</span>&gt;</span>Select<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">optgroup</span> <span class="hljs-attr">label</span>=<span class="hljs-string">"Alaskan/Hawaiian Time Zone"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"AK"</span>&gt;</span>Alaska<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"HI"</span>&gt;</span>Hawaii<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">optgroup</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">optgroup</span> <span class="hljs-attr">label</span>=<span class="hljs-string">"Pacific Time Zone"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"CA"</span>&gt;</span>California<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"NV"</span>&gt;</span>Nevada<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"OR"</span>&gt;</span>Oregon<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"WA"</span>&gt;</span>Washington<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">optgroup</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Multiple Select --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"select2 form-control select2-multiple"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"select2"</span> <span class="hljs-attr">multiple</span>=<span class="hljs-string">"multiple"</span> <span class="hljs-attr">data-placeholder</span>=<span class="hljs-string">"Choose ..."</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">optgroup</span> <span class="hljs-attr">label</span>=<span class="hljs-string">"Alaskan/Hawaiian Time Zone"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"AK"</span>&gt;</span>Alaska<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"HI"</span>&gt;</span>Hawaii<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">optgroup</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">optgroup</span> <span class="hljs-attr">label</span>=<span class="hljs-string">"Pacific Time Zone"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"CA"</span>&gt;</span>California<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"NV"</span>&gt;</span>Nevada<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"OR"</span>&gt;</span>Oregon<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"WA"</span>&gt;</span>Washington<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">optgroup</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">optgroup</span> <span class="hljs-attr">label</span>=<span class="hljs-string">"Mountain Time Zone"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"AZ"</span>&gt;</span>Arizona<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"CO"</span>&gt;</span>Colorado<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"ID"</span>&gt;</span>Idaho<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"MT"</span>&gt;</span>Montana<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"NE"</span>&gt;</span>Nebraska<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"NM"</span>&gt;</span>New Mexico<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"ND"</span>&gt;</span>North Dakota<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"UT"</span>&gt;</span>Utah<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"WY"</span>&gt;</span>Wyoming<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">optgroup</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> 
    <!-- end row-->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Date Range Picker</h4>
                    <p class="text-muted font-14">
                        A JavaScript component for choosing date ranges, dates and times.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#daterange-picker-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#daterange-picker-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="daterange-picker-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Date Range -->
                                    <div class="mb-3">
                                        <label class="form-label">Date Range</label>
                                        <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Date Range Picker With Times -->
                                    <div class="mb-3">
                                        <label class="form-label">Date Range Picker With Times</label>
                                        <input type="text" class="form-control date" id="daterangetime" data-toggle="date-picker" data-time-picker="true" data-locale="{'format': 'DD/MM hh:mm A'}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Single Date Picker -->
                                    <div class="mb-3">
                                        <label class="form-label">Single Date Picker</label>
                                        <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Predefined Date Ranges -->
                                    <div class="mb-3">
                                        <label class="form-label">Predefined Date Ranges</label>
                                        <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue" data-cancel-class="btn-light">
                                            <i class="mdi mdi-calendar"></i>&nbsp;
                                            <span id="selectedValue"></span> <i class="mdi mdi-menu-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>                      
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="daterange-picker-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-comment">&lt;!-- Date Range --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Date Range<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control date"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"singledaterange"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"date-picker"</span> <span class="hljs-attr">data-cancel-class</span>=<span class="hljs-string">"btn-warning"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Date Range Picker With Times --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Date Range Picker With Times<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control date"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"daterangetime"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"date-picker"</span> <span class="hljs-attr">data-time-picker</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">data-locale</span>=<span class="hljs-string">"{'format': 'DD/MM hh:mm A'}"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Single Date Picker --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Single Date Picker<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control date"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"birthdatepicker"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"date-picker"</span> <span class="hljs-attr">data-single-date-picker</span>=<span class="hljs-string">"true"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Predefined Date Ranges --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Predefined Date Ranges<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"reportrange"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"date-picker-range"</span> <span class="hljs-attr">data-target-display</span>=<span class="hljs-string">"#selectedValue"</span>  <span class="hljs-attr">data-cancel-class</span>=<span class="hljs-string">"btn-light"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mdi mdi-calendar"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span>&amp;nbsp;<br>        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"selectedValue"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mdi mdi-menu-down"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Switch</h4>
                    <p class="text-muted font-14">
                        Here are a few types of switches.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-4">
                        <li class="nav-item">
                            <a href="#switches-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#switches-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="switches-preview">
                            <!-- without label-->
                            <input type="checkbox" id="switch0" data-switch="none">
                            <label for="switch0" data-on-label="" data-off-label=""></label>

                            <!-- Bool Switch-->
                            <input type="checkbox" id="switch1" checked="" data-switch="bool">
                            <label for="switch1" data-on-label="On" data-off-label="Off"></label>

                            <!-- Primary Switch-->
                            <input type="checkbox" id="switch2" checked="" data-switch="primary">
                            <label for="switch2" data-on-label="On" data-off-label="Off"></label>

                            <!-- Success Switch-->
                            <input type="checkbox" id="switch3" checked="" data-switch="success">
                            <label for="switch3" data-on-label="Yes" data-off-label="No"></label>

                            <!-- Info Switch-->
                            <input type="checkbox" id="switch4" checked="" data-switch="info">
                            <label for="switch4" data-on-label="On" data-off-label="Off"></label>

                            <!-- Warning Switch-->
                            <input type="checkbox" id="switch5" checked="" data-switch="warning">
                            <label for="switch5" data-on-label="Yes" data-off-label="No"></label>

                            <!-- Danger Switch-->
                            <input type="checkbox" id="switch6" checked="" data-switch="danger">
                            <label for="switch6" data-on-label="On" data-off-label="Off"></label>

                            <!-- Dark Switch-->
                            <input type="checkbox" id="switch7" checked="" data-switch="secondary">
                            <label for="switch7" data-on-label="Yes" data-off-label="No"></label>  
                            
                            <!-- Disbled Switch-->
                            <input type="checkbox" id="switchdis" data-switch="primary" checked="" disabled="">
                            <label for="switchdis" data-on-label="On" data-off-label="Off"></label>

                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="switches-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-comment">&lt;!-- Without label--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch0"</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"none"</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch0"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">""</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">""</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <br><span class="hljs-comment">&lt;!-- Bool Switch--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch1"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"bool"</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch1"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"On"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"Off"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <br><span class="hljs-comment">&lt;!-- Primary Switch--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch2"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"primary"</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch2"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"On"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"Off"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <br><span class="hljs-comment">&lt;!-- Success Switch--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch3"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"success"</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch3"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"Yes"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"No"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <br><span class="hljs-comment">&lt;!-- Info Switch--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch4"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"info"</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch4"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"On"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"Off"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <br><span class="hljs-comment">&lt;!-- Warning Switch--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch5"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"warning"</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch5"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"Yes"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"No"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <br><span class="hljs-comment">&lt;!-- Danger Switch--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch6"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"danger"</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch6"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"On"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"Off"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>        <br><span class="hljs-comment">&lt;!-- Dark Switch--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switch7"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"secondary"</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switch7"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"Yes"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"No"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span>  <br><br><span class="hljs-comment">&lt;!-- Disbled Switch--&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"checkbox"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"switchdis"</span> <span class="hljs-attr">data-switch</span>=<span class="hljs-string">"primary"</span> <span class="hljs-attr">checked</span> <span class="hljs-attr">disabled</span>/&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">for</span>=<span class="hljs-string">"switchdis"</span> <span class="hljs-attr">data-on-label</span>=<span class="hljs-string">"On"</span> <span class="hljs-attr">data-off-label</span>=<span class="hljs-string">"Off"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Bootstrap Datepicker</h4>
                    <p class="text-muted font-14">
                        Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#datepicker-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#datepicker-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="datepicker-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 position-relative" id="datepicker1">
                                        <label class="form-label">Date Picker</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 position-relative" id="datepicker2">
                                        <label class="form-label">Date View</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-container="#datepicker2">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 position-relative" id="datepicker3">
                                        <label class="form-label">Multi Datepicker</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-multidate="true" data-date-container="#datepicker3">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 position-relative" id="datepicker4">
                                        <label class="form-label">Autoclose</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 position-relative" id="datepicker5">
                                        <label class="form-label">Month View</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1" data-date-container="#datepicker5">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 position-relative" id="datepicker6">
                                        <label class="form-label">Year View</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-min-view-mode="2" data-date-container="#datepicker6">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Inline Datepicker</label>
                                        <div data-provide="datepicker-inline"><div class="datepicker datepicker-inline"><div class="datepicker-days" style=""><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">August 2021</th><th class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day" data-date="1627171200000">25</td><td class="old day" data-date="1627257600000">26</td><td class="old day" data-date="1627344000000">27</td><td class="old day" data-date="1627430400000">28</td><td class="old day" data-date="1627516800000">29</td><td class="old day" data-date="1627603200000">30</td><td class="old day" data-date="1627689600000">31</td></tr><tr><td class="day" data-date="1627776000000">1</td><td class="day" data-date="1627862400000">2</td><td class="day" data-date="1627948800000">3</td><td class="day" data-date="1628035200000">4</td><td class="day" data-date="1628121600000">5</td><td class="day" data-date="1628208000000">6</td><td class="day" data-date="1628294400000">7</td></tr><tr><td class="day" data-date="1628380800000">8</td><td class="day" data-date="1628467200000">9</td><td class="day" data-date="1628553600000">10</td><td class="day" data-date="1628640000000">11</td><td class="day" data-date="1628726400000">12</td><td class="day" data-date="1628812800000">13</td><td class="day" data-date="1628899200000">14</td></tr><tr><td class="day" data-date="1628985600000">15</td><td class="day" data-date="1629072000000">16</td><td class="day" data-date="1629158400000">17</td><td class="day" data-date="1629244800000">18</td><td class="day" data-date="1629331200000">19</td><td class="day" data-date="1629417600000">20</td><td class="day" data-date="1629504000000">21</td></tr><tr><td class="day" data-date="1629590400000">22</td><td class="day" data-date="1629676800000">23</td><td class="day" data-date="1629763200000">24</td><td class="day" data-date="1629849600000">25</td><td class="day" data-date="1629936000000">26</td><td class="day" data-date="1630022400000">27</td><td class="day" data-date="1630108800000">28</td></tr><tr><td class="day" data-date="1630195200000">29</td><td class="day" data-date="1630281600000">30</td><td class="day" data-date="1630368000000">31</td><td class="new day" data-date="1630454400000">1</td><td class="new day" data-date="1630540800000">2</td><td class="new day" data-date="1630627200000">3</td><td class="new day" data-date="1630713600000">4</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2021</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month focused">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2020-2029</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2019</span><span class="year">2020</span><span class="year focused">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year new">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade">2010</span><span class="decade focused">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
                                    </div>
                                </div>
                            </div>                      
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="datepicker-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-comment">&lt;!-- Date Picker --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3 position-relative"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"datepicker1"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Date Picker<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"datepicker"</span> <span class="hljs-attr">data-date-container</span>=<span class="hljs-string">"#datepicker1"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Date View --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3 position-relative"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"datepicker2"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Date View<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"datepicker"</span> <span class="hljs-attr">data-date-format</span>=<span class="hljs-string">"d-M-yyyy"</span> <span class="hljs-attr">data-date-container</span>=<span class="hljs-string">"#datepicker2"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Multi Datepicker --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3 position-relative"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"datepicker3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Multi Datepicker<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"datepicker"</span> <span class="hljs-attr">data-date-multidate</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">data-date-container</span>=<span class="hljs-string">"#datepicker3"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Autoclose --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3 position-relative"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"datepicker4"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Autoclose<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"datepicker"</span> <span class="hljs-attr">data-date-autoclose</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">data-date-container</span>=<span class="hljs-string">"#datepicker4"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Month View --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3 position-relative"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"datepicker5"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Month View<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"datepicker"</span> <span class="hljs-attr">data-date-format</span>=<span class="hljs-string">"MM yyyy"</span> <span class="hljs-attr">data-date-min-view-mode</span>=<span class="hljs-string">"1"</span> <span class="hljs-attr">data-date-container</span>=<span class="hljs-string">"#datepicker5"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Year View --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3 position-relative"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"datepicker6"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Year View<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"datepicker"</span> <span class="hljs-attr">data-date-min-view-mode</span>=<span class="hljs-string">"2"</span> <span class="hljs-attr">data-date-container</span>=<span class="hljs-string">"#datepicker6"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-comment">&lt;!-- Inline Datepicker --&gt;</span><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Inline Datepicker<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"datepicker-inline"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Input Masks</h4>
                    <p class="text-muted font-14">
                        A jQuery Plugin to make masks on form fields and HTML elements.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#input-masks-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#input-masks-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="input-masks-preview">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="#">
                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000" maxlength="10">
                                            <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Hour</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00:00:00" maxlength="8">
                                            <span class="font-13 text-muted">e.g "HH:MM:SS"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Date &amp; Hour</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00" maxlength="19">
                                            <span class="font-13 text-muted">e.g "DD/MM/YYYY HH:MM:SS"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">ZIP Code</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00000-000" maxlength="9">
                                            <span class="font-13 text-muted">e.g "xxxxx-xxx"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Crazy Zip Code</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0-00-00-00" maxlength="10">
                                            <span class="font-13 text-muted">e.g "x-xx-xx-xx"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Money</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true" maxlength="22">
                                            <span class="font-13 text-muted">e.g "Your money"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Money 2</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true">
                                            <span class="font-13 text-muted">e.g "#.##0,00"</span>
                                        </div>

                                    </form>
                                </div> <!-- end col -->

                                <div class="col-md-6">
                                    <form action="#">
                                        <div class="mb-3">
                                            <label class="form-label">Telephone</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000-0000" maxlength="9">
                                            <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Telephone with Code Area</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 0000-0000" maxlength="14">
                                            <span class="font-13 text-muted">e.g "(xx) xxxx-xxxx"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">US Telephone</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" maxlength="14">
                                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">São Paulo Celphones</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 00000-0000" maxlength="15">
                                            <span class="font-13 text-muted">e.g "(xx) xxxxx-xxxx"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">CPF</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true" maxlength="14">
                                            <span class="font-13 text-muted">e.g "xxx.xxx.xxxx-xx"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">CNPJ</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true" maxlength="18">
                                            <span class="font-13 text-muted">e.g "xx.xxx.xxx/xxxx-xx"</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">IP Address</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true" maxlength="15">
                                            <span class="font-13 text-muted">e.g "xxx.xxx.xxx.xxx"</span>
                                        </div>
                                    </form>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->                      
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="input-masks-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Date<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"00/00/0000"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "DD/MM/YYYY"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Hour<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"00:00:00"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "HH:MM:SS"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Date &amp; Hour<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"00/00/0000 00:00:00"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "DD/MM/YYYY HH:MM:SS"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>ZIP Code<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"00000-000"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "xxxxx-xxx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Crazy Zip Code<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"0-00-00-00"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "x-xx-xx-xx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Money<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"000.000.000.000.000,00"</span> <span class="hljs-attr">data-reverse</span>=<span class="hljs-string">"true"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "Your money"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Money 2<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"#.##0,00"</span> <span class="hljs-attr">data-reverse</span>=<span class="hljs-string">"true"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "#.##0,00"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Telephone<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"0000-0000"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "xxxx-xxxx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Telephone with Code Area<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"(00) 0000-0000"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "(xx) xxxx-xxxx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>US Telephone<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"(000) 000-0000"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "(xxx) xxx-xxxx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>São Paulo Celphones<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"(00) 00000-0000"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "(xx) xxxxx-xxxx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>CPF<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"000.000.000-00"</span> <span class="hljs-attr">data-reverse</span>=<span class="hljs-string">"true"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "xxx.xxx.xxxx-xx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>CNPJ<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"00.000.000/0000-00"</span> <span class="hljs-attr">data-reverse</span>=<span class="hljs-string">"true"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "xx.xxx.xxx/xxxx-xx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>IP Address<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"input-mask"</span> <span class="hljs-attr">data-mask-format</span>=<span class="hljs-string">"099.099.099.099"</span> <span class="hljs-attr">data-reverse</span>=<span class="hljs-string">"true"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"font-13 text-muted"</span>&gt;</span>e.g "xxx.xxx.xxx.xxx"<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Bootstrap Touchspin</h4>
                    <p class="text-muted font-14">
                        A mobile and touch friendly input spinner component for Bootstrap.
                        Specify attribute <code>data-toggle="touchspin"</code> and your input would be conveterted into touch friendly spinner. 
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#touchspin-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#touchspin-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="touchspin-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Using data attributes</label>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><input data-toggle="touchspin" type="text" value="55" class="form-control"><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Example with postfix (large)</label>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><input data-toggle="touchspin" value="18.20" type="text" data-step="0.1" data-decimals="2" data-bts-postfix="%" class="form-control"><span class="input-group-addon bootstrap-touchspin-postfix input-group-append"><span class="input-group-text">%</span></span><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">With prefix</label>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix input-group-prepend"><span class="input-group-text">$</span></span><input data-toggle="touchspin" type="text" data-bts-prefix="$" class="form-control"><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
                                    </div>

                                    <div class="mb-0">
                                        <label class="form-label">Change button class</label>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-danger bootstrap-touchspin-down" type="button">-</button></span><input data-toggle="touchspin" value="77" type="text" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info" class="form-control"><span class="input-group-btn input-group-append"><button class="btn btn-info bootstrap-touchspin-up" type="button">+</button></span></div>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label class="form-label">Init with empty value:</label>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><input data-toggle="touchspin" type="text" class="form-control"><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Max value - (Default value 100)</label>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><input data-toggle="touchspin" data-bts-max="500" value="128" data-btn-vertical="true" type="text" class="form-control"><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">With prefix and postfix button</label>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix input-group-prepend btn btn-light"><span class="input-group-text">A Button</span></span><input data-toggle="touchspin" data-bts-prefix="A Button" data-bts-prefix-extra-class="btn btn-light" data-bts-postfix="A Button" data-bts-postfix-extra-class="btn btn-light" type="text" class="form-control"><span class="input-group-addon bootstrap-touchspin-postfix input-group-append btn btn-light"><span class="input-group-text">A Button</span></span><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button></span></div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->                      
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="touchspin-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Using data attributes<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"touchspin"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"55"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Example with postfix (large)<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"touchspin"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"18.20"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">data-step</span>=<span class="hljs-string">"0.1"</span> <span class="hljs-attr">data-decimals</span>=<span class="hljs-string">"2"</span> <span class="hljs-attr">data-bts-postfix</span>=<span class="hljs-string">"%"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>With prefix<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"touchspin"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">data-bts-prefix</span>=<span class="hljs-string">"$"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Change button class<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"touchspin"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"77"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">data-bts-button-down-class</span>=<span class="hljs-string">"btn btn-danger"</span> <span class="hljs-attr">data-bts-button-up-class</span>=<span class="hljs-string">"btn btn-info"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Init with empty value:<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"touchspin"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Max value - (Default value 100)<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"touchspin"</span> <span class="hljs-attr">data-bts-max</span>=<span class="hljs-string">"500"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"128"</span> <span class="hljs-attr">data-btn-vertical</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>With prefix and postfix button<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"touchspin"</span> <span class="hljs-attr">data-bts-prefix</span>=<span class="hljs-string">"A Button"</span> <span class="hljs-attr">data-bts-prefix-extra-class</span>=<span class="hljs-string">"btn btn-light"</span>  <span class="hljs-attr">data-bts-postfix</span>=<span class="hljs-string">"A Button"</span> <span class="hljs-attr">data-bts-postfix-extra-class</span>=<span class="hljs-string">"btn btn-light"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Bootstrap Maxlength</h4>
                    <p class="text-muted font-14">
                        Uses the HTML5 attribute "maxlength" to work. Just specify <code>data-toggle="maxlength"</code> attribute
                        to have maxlength indication on any input.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#maxlength-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#maxlength-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="maxlength-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Default usage</label>
                                        <p class="text-muted font-13">
                                            The badge will show up by default when the remaining chars are 10 or less:
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" data-toggle="maxlength">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Threshold value</label>
                                        <p class="text-muted font-13">
                                            Satrt displaying the indication when reached to some threshhold. Specift the data attribute <code>threshold</code>. E.g.
                                            <code>data-threshold="12"</code>
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" data-toggle="maxlength" data-threshold="12">
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label class="form-label">Position</label>
                                        <p class="text-muted font-13">
                                            All you need to do is specify the data attribute <code>placement</code>. The possible positions are left, top, right, bottom-right, top-right, top-left, 
                                            bottom, bottom-left and centered-right. If none is specified, the positioning will be defauted to 'bottom'.
                                            E.g. <code>data-placement="top"</code>
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" data-toggle="maxlength" data-placement="top">
                                    </div>

                                    <div>
                                        <label class="form-label">Textareas</label>
                                        <p class="text-muted font-13">
                                            Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                        </p>
                                        <textarea data-toggle="maxlength" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->                      
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="maxlength-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Default usage<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-muted font-13"</span>&gt;</span><br>        The badge will show up by default when the remaining chars are 10 or less:<br>    <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">maxlength</span>=<span class="hljs-string">"25"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"maxlength"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Threshold value<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-muted font-13"</span>&gt;</span><br>        Satrt displaying the indication when reached to some threshhold. Specift the data attribute <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>threshold<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>. E.g.<br>        <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>data-threshold="12"<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">maxlength</span>=<span class="hljs-string">"25"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"maxlength"</span> <span class="hljs-attr">data-threshold</span>=<span class="hljs-string">"12"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Position<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-muted font-13"</span>&gt;</span><br>        All you need to do is specify the data attribute <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>placement<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span>. The possible positions are left, top, right, bottom-right, top-right, top-left, <br>        bottom, bottom-left and centered-right. If none is specified, the positioning will be defauted to 'bottom'.<br>        E.g. <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>data-placement="top"<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">maxlength</span>=<span class="hljs-string">"25"</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"maxlength"</span> <span class="hljs-attr">data-placement</span>=<span class="hljs-string">"top"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Textareas<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-muted font-13"</span>&gt;</span><br>        Bootstrap maxlength supports textarea as well as inputs. Even on old IE.<br>    <span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">textarea</span> <span class="hljs-attr">data-toggle</span>=<span class="hljs-string">"maxlength"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">maxlength</span>=<span class="hljs-string">"225"</span> <span class="hljs-attr">rows</span>=<span class="hljs-string">"3"</span> </span><br><span class="hljs-tag">        <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"This textarea has a limit of 225 chars."</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">textarea</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Typeahead</h4>
                    <p class="text-muted font-14">
                        Typeahead.js is a fast and fully-featured autocomplete library.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#typeahead-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#typeahead-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="typeahead-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">The Basics</label>
                                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control tt-hint" data-provide="typeahead" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input type="text" class="form-control tt-input" data-provide="typeahead" id="the-basics" placeholder="Basic Example" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Nunito, sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-states"></div></div></span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label class="form-label">Bloodhound (Suggestion Engine)</label>
                                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="form-control tt-hint" type="text" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input id="bloodhound" class="form-control tt-input" type="text" placeholder="States of USA" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Nunito, sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-states"></div></div></span>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Prefetch</label>
                                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control tt-hint" data-provide="typeahead" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input type="text" class="form-control tt-input" data-provide="typeahead" id="prefetch" placeholder="States of USA" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Nunito, sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-countries"></div></div></span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label class="form-label">Remote</label>
                                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control tt-hint" data-provide="typeahead" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input type="text" class="form-control tt-input" data-provide="typeahead" id="remote" placeholder="States of USA" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Nunito, sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-best-pictures"></div></div></span>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Custom Templates</label>
                                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="form-control tt-hint" type="text" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input id="custom-templates" class="form-control tt-input" type="text" placeholder="States of USA" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Nunito, sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-best-pictures"></div></div></span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label class="form-label">Default Suggestions</label>
                                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control tt-hint" data-provide="typeahead" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input type="text" class="form-control tt-input" data-provide="typeahead" id="default-suggestions" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Nunito, sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-nfl-teams"></div></div></span>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-0">
                                        <label class="form-label">Multiple Datasets</label>
                                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control tt-hint" data-provide="typeahead" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input type="text" class="form-control tt-input" data-provide="typeahead" id="multiple-datasets" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Nunito, sans-serif; font-size: 14.4px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-nba-teams"></div><div class="tt-dataset tt-dataset-nhl-teams"></div></div></span>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->                      
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="typeahead-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>The Basics<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"typeahead"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"the-basics"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"Basic Example"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Bloodhound (Suggestion Engine)<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"bloodhound"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"States of USA"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Prefetch<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"typeahead"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"prefetch"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"States of USA"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Remote<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"typeahead"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"remote"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"States of USA"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Custom Templates<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"custom-templates"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">placeholder</span>=<span class="hljs-string">"States of USA"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Default Suggestions<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"typeahead"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"default-suggestions"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Multiple Datasets<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"typeahead"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"multiple-datasets"</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Timepicker</h4>
                    <p class="text-muted font-14">
                        Easily select a time for a text input using your mouse or keyboards arrow keys. Specify attribute <code>data-toggle="timepicker"</code>
                        and you would have nice timepicker input element.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#timepicker-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#timepicker-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="timepicker-preview">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Default Time Picker</label>
                                        <div class="input-group" id="timepicker-input-group1">
                                            <input id="timepicker" type="text" class="form-control" data-provide="timepicker">
                                            <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <label class="form-label">24 Hour Mode Time Picker E.g. <code>data-show-meridian="false"</code></label>
                                        <div class="input-group" id="timepicker-input-group2">
                                            <input id="timepicker2" type="text" class="form-control" data-provide="timepicker" data-show-meridian="false">
                                            <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <div class="mb-0">
                                        <label class="form-label">Specify a step for the minute field E.g. <code>data-minute-step="5"</code></label>
                                        <div class="input-group" id="timepicker-input-group3">
                                            <input id="timepicker3" type="text" class="form-control" data-provide="timepicker" data-minute-step="5">
                                            <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->                      
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="timepicker-code">
                            <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-3"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Default Time Picker<span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"timepicker-input-group1"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"timepicker"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">"timepicker"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group-text"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dripicons-clock"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>24 Hour Mode Time Picker E.g. <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>data-show-meridian="false"<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"timepicker-input-group2"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"timepicker2"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">'timepicker'</span> <span class="hljs-attr">data-show-meridian</span>=<span class="hljs-string">"false"</span> &gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group-text"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dripicons-clock"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>                                                    <br><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">label</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-label"</span>&gt;</span>Specify a step for the minute field E.g. <span class="hljs-tag">&lt;<span class="hljs-name">code</span>&gt;</span>data-minute-step="5"<span class="hljs-tag">&lt;/<span class="hljs-name">code</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">label</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"timepicker-input-group3"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"timepicker3"</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"text"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"form-control"</span> <span class="hljs-attr">data-provide</span>=<span class="hljs-string">'timepicker'</span> <span class="hljs-attr">data-minute-step</span>=<span class="hljs-string">"5"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"input-group-text"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"dripicons-clock"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div>
</x-theme>                  