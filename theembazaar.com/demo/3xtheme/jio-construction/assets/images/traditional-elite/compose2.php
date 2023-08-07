<?php
Cee_assets::Assets();

$user_session = $_SESSION["perp_username"];
$email = users_model::staff_email($user_session);

//  $user = $_SESSION["selected_user"][0];

?>

<script src="<?php echo BASE_URL;?>date/dist/js/DatePickerX.js"></script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/demo.css" />

    <!-- jquery linking  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div style="margin-bottom:140px">
        <div class="email-app m-4 card">
            <main class="card-body">
                <form method="post" action="<?php echo BASE_URL;?>mailbox/process_send_mail"
                    enctype="multipart/form-data">
                    <?php
							   Session::form_csfr(); 
				 ?>

                    <?php    
				 echo Session::ceedata("cee_email_sent");
				 ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="file-att2 p-3 fs-6 text-center">
                                    <a href=""><i class="las la-envelope-open-text"></i>Save as Draft</a>
                                    <a href=""><i class="las la-reply ms-5"></i>Responses</a>
                                    <a href=""><i class="las la-file-download ms-5"></i>Save</a>
                                </div>

                                <?php
                                // $hostname = '{imap.titan.email:993/imap/ssl/novalidate-cert}INBOX';
                                // $username = 'kanu.chisom@premiumesowp.com';
                                // $password = '@premiumesowp.com';

                                // $mailbox = imap_open($hostname, $username, $password);
                                // if (!$mailbox) {
                                //     die('Failed to connect to the IMAP server');
                                // } else {
                                //     echo "Connected\n";

                                    // Get all mail headers

                                    // $con = email_model::connectToMailbox();
                                    // if($con){
                                    //     echo "Connected well done";
                                    // }else{
                                    //     echo "not connected";
                                    // }
                                    
                                    // $mails = imap_search($con, 'ALL');

                                    // // Loop through each mail
                                    // foreach ($mails as $mail) {
                                    //     $header = imap_headerinfo($con, $mail);
                                    //     $from = $header->fromaddress;
                                    //     $to = $header->toaddress;
                                    //     $date = $header->date;
                                    //     $subject = $header->subject;

                                    //     echo "From: $from\n";
                                    //     echo "To: $to\n";
                                    //     echo "Date: $date\n";
                                    //     echo "Subject: $subject\n";

                                    //     // Fetch email content
                                    //     $emailContent = imap_fetchbody($con, $mail, '1.1');

                                    //     // Decode and display the content
                                    //     $decodedContent = imap_qprint($emailContent);
                                    //     echo "Content:\n$decodedContent\n";
                                        
                                    //     echo "-----------------\n";
                                    // }

                                    // // Close the connection
                                    // imap_close($con);
                                


                                // $url = "{imap.titan.email:993/imap/novalidate-cert}INBOX";
                                // //$id = "test@catholicdioceseofawka.org";
                                // $id = "kanu.chisom@premiumesowp.com";
                                // $pwd = "@premiumesowp.com";


                        //         $headers = imap_headers($mailbox);
                        // foreach ($headers as $header) {
                        //     echo "Header: $header\n";
                        // }

                        // $status = email_model::connectToMailbox();
                        // echo $status;


                                
                                ?>

                                <div class="from-div  mb-3">
                                    <div class="from-text d-flex">
                                        <h6>From</h6>
                                        <SELECT type="text" name="domain" class="form-control"
                                            placeholder="Domain fullname" required autocomplete="off"
                                            id="domain_selector">

                                            <option value="<?php echo $email[0]["email"] ?>">
                                                <?php echo $email[0]["email"] ?></option>
                                        </SELECT>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="to-div">
                                    <div class="to-text d-flex">
                                        <h6>To</h6>
                                        <div class="input-group mb-2">
                                            <textarea name="_to" id="_to" tabindex="-1" data-recipient-input="true"
                                                autocomplete="off" aria-autocomplete="list" aria-expanded="false"
                                                role="combobox"
                                                style="position: absolute; opacity: 0; left: -5000px; width: 10px;">

                                            </textarea>

                                            <ul onclick="$(this).removeClass('bhgy');"
                                                class="form-control recipient-input ac-input rounded-left" id="to_val">

                                                <li class="input" id="id_to"><input type="text" class="mid all-emails"
                                                        id="mid_to">
                                                </li>
                                            </ul>

                                            <!-- where i append my emails  -->
                                            <!-- <input type="" name="" class="d"> -->
                                            <input type="text" id="store-emails" name="fectched-emails" hidden>

                                            <div class="input-group-append">
                                                <button class=""
                                                    style=" background-color: #F4F4F4; height:40px; border: none; margin-bottom:0px"
                                                    type="button"><i class="las la-user-plus"></i>
                                                </button>
                                            </div>
                                            <div class="input-group-append">
                                                <button onclick="display_cc()" class=""
                                                    style=" background-color: #F4F4F4; height:40px; border: none; margin-bottom:0px"
                                                    type="button">CC</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cc-div" id="cc-div">
                                    <div class="to-text d-flex">
                                        <h6>Cc</h6>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Recipient's username"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class=""
                                                    style=" background-color: #F4F4F4; height:40px; border: none; margin-bottom:0px"
                                                    type="button"><i class="las la-user-plus"></i></button>
                                            </div>
                                            <div class="input-group-append">
                                                <button class="" id="delete_cc"
                                                    style="border-radius:0px 5px 5px 0px; background-color: #F4F4F4; height:40px; margin-left:2px; border:none; margin-bottom:0px"
                                                    type="button"><i class="las la-trash-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-div">
                                    <div class="to-text d-flex">
                                        <h6>Subject</h6>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="subject"
                                                placeholder="Recipient's username" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-div">
                                    <textarea name="content" id="summernote" cols="30" rows="10">

                                    <br>
                                    <br>
                                    <br>
                            
                        <br>
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="attach-div d-flex">
                                    <div class="file-att">
                                        <h6>Maximum allowed file size is 50 MB</h6>
                                        <input type="file" name="attachment[]" multiple id="attachment-input"
                                            style="display: none;">
                                        <button type="button" id="add-attachment-button">Add Attachment</button>
                                        <ul id="attachment-list"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- styling the attachment  -->
                        <style>
                        #emailSignature {
                            background-color: #f2f2f2;
                            padding: 10px;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                        }

                        #emailSignature img {
                            max-width: 100px;
                            height: auto;
                        }

                        .attach-div {
                            position: relative;
                        }

                        #attachment-list {
                            max-height: 200px;
                            overflow-y: auto;
                            padding: 0;
                        }

                        .attachment-item {
                            display: flex;
                            align-items: center;
                            margin-bottom: 5px;
                        }

                        .attachment-item .attachment-name {
                            margin-left: 10px;
                        }

                        .attachment-item .remove-attachment {
                            margin-left: 5px;
                            color: red;
                            cursor: pointer;
                        }
                        </style>


                        <div class="pop" id="li-hide">
                            <div class="li-div">
                                <ul>
                                    <li onclick="display_cc()">
                                        <a href="#" class="cc-pop"><i class="las la-envelope p-1"></i>Cc</a>
                                    </li>
                                    <li onclick="display_bcc()" id="">
                                        <a href="#" class="bcc-pop"><i class="las la-envelope p-1"></i>Bcc</a>
                                    </li>
                                    <li onclick="display_reply()" id="">
                                        <a href="#" class="reply-pop"><i class="las la-envelope p-1"></i>Reply To</a>
                                    </li>
                                    <li onclick="display_follow()" id="">
                                        <a href="#" class="follow-pop"><i class="las la-envelope p-1"></i>Following Up
                                            to</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button type="submit" class=""
                            style="background-color:blue; border:none; margin: 20px 0px 0px 2px; width:90px; padding:15px; color:white; border-radius:5px"><i
                                class="las la-paper-plane" style="margin-right:5px"></i>Send</button>
                    </div>

                </form>

            </main>
        </div>
    </div>

    <style>
    .bhgy {
        border: 1px solid #F00
    }

    /* .cc-pop {
        position: relative;

    } */

    /* hide styling */
    #li-hide {
        display: none;
    }



    .li-div {
        position: relative:
    }

    li {
        list-style: none;
    }

    .li-div li {
        margin-top: 10px !important;
    }

    .cc-pop::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 2px;
        background-color: #EEEEEE;
        top: 32px;
        left: 0px;
        border-radius: 10px;
    }

    .bcc-pop::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 2px;
        background-color: #EEEEEE;
        top: 70px;
        left: 0px;
        border-radius: 10px;
    }

    .reply-pop::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 2px;
        background-color: #EEEEEE;
        top: 104px;
        left: 0px;
        border-radius: 10px;
    }


    ul {
        padding-left: 10px !important;
    }

    .pop {
        background-color: white;
        width: 150px;
        height: 150px;
        position: absolute;
        left: 930px;
        top: 178px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        border-radius: 5px;
    }

    @media (max-width: 460px) {
        .pop {
            background-color: white;
            width: 150px;
            height: 150px;
            position: absolute;
            left: 150px;
            top: 200px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }
    }

    .from-div {
        position: relative;
    }

    .from-div input {
        width: 90%;

    }

    .from-div h6 {
        margin-right: 50px;
        margin-top: 10px;
    }


    .to-div h6 {
        margin-right: 70px;
        margin-top: 10px;
    }

    .bcc-div h6 {
        margin-right: 60px;
        margin-top: 10px;
    }

    .reply-div h6 {
        margin-right: 33px;
        margin-top: 10px;
        /* display: inline-block; */
    }

    .follow-div h6 {
        margin-right: 11px;
        margin-top: 10px;
        /* display: inline-block; */
    }

    .cc-div {
        display: none;
    }

    .bcc-div {
        display: none;
    }

    .reply-div {
        display: none;
    }

    .follow-div {
        display: none;
    }

    .cc-div h6 {
        margin-right: 65px;
        margin-top: 10px;
    }

    .sub-div h6 {
        margin-right: 32px;
        margin-top: 10px;
    }

    .btn {
        background-color: transparent !important;
    }

    .attach-div {
        border: 1px solid #EEEEEE;
        width: 100%;
        height: auto;
        padding: 10px;
        margin-top: 10px;
    }

    .file-att {
        border: 1px dotted black;
        width: 100%;
        height: auto;
        padding: 20px;

    }


    /* second work  */
    .email-app {
        display: flex;
        flex-direction: row;
        background: #fff;
        border: 1px solid #e1e6ef;
    }

    .email-app main {
        min-width: 0;
        flex: 1;
        padding: 1rem;
    }

    .email-app .inbox .toolbar {
        padding-bottom: 1rem;
        border-bottom: 1px solid #e1e6ef;
    }


    .email-tag {
        display: inline-flex;
        align-items: center;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 10px;
        padding: 1px 7px;
        margin: 0px 5px 10px 0px;
        cursor: pointer;
    }

    .email-tag-text {
        margin-right: 3px;
        font-size: small;
        text-transform: lowercase;
        max-width: 14em;
        word-wrap: break-word;
    }

    .email-tag-delete {
        color: #dc3545;
        margin-left: 3px;
    }

    .flex_tags {
        display: flex;
        flex-wrap: wrap;
    }


    /* testing css */

    a.button.icon.insert.recipient:before,
    button.btn.insert.recipient:before {
        content: "\f234"
    }

    .menu a.recipient:before {
        content: "\f0e0";
        font-weight: 400
    }

    .input-group .icon.add.recipient:before {
        content: "\f0c0"
    }

    .recipient-input .recipient {
        display: flex;
        position: relative;
        max-width: calc(50% - 3px);
        border: 1px solid #ced4da;
        background-color: #f1f3f4;
        border-radius: .25em;
        padding: 0 .25em;
        margin-top: 4px;
        margin-right: .2em;
        white-space: nowrap;
        cursor: default
    }

    @media screen and (max-width:450px) {
        .recipient-input .recipient {
            width: 100%;
            max-width: 100%
        }
    }

    .recipient-input li:not(.recipient) {
        user-select: text
    }

    .recipient-input {
        display: flex;
        flex-wrap: wrap;
        padding: 0 .75rem 4px .75rem;
        list-style-type: none;
        cursor: text;
        height: 40px !important;
    }

    .recipient-input.focus {
        border-color: #37beff;
        box-shadow: 0 0 0 .2rem rgba(55, 190, 255, 0.25)
    }

    .recipient-input .name {
        overflow: hidden;
        text-overflow: ellipsis;
        flex-grow: 1;
        line-height: 1.1;
        padding: 3px;
        vertical-align: middle
    }

    .recipient-input .email {
        text-indent: -5000rem;
        display: inline-block;
        width: 0
    }

    .recipient-input .email {
        text-indent: -5000rem;
        display: inline-block;
        width: 0
    }

    .recipient-input .quotes {
        position: absolute;
        width: 0;
        opacity: 0
    }

    .recipient-input a.button.icon {
        font-size: .8em;
        cursor: pointer;
        padding: 0
    }

    .recipient-input a.button.icon:before {
        float: none;
        display: inline-block;
        width: 1em;
        line-height: 1.5
    }

    .recipient-input li {
        max-width: 100%
    }

    .recipient-input li:not(.recipient) {
        user-select: text
    }

    .recipient-input li.input {
        flex: 1;
        min-width: 100px
    }

    .recipient-input input {
        width: 100%;
        background: transparent !important;
        border: 0 !important;
        margin-top: 4px;
        outline: 0;
        line-height: 1.5
    }

    .recipient-input input::-ms-clear {
        display: none
    }
    </style>

    <script>
    $(document).ready(function() {
        $('#summernote').summernote();

        $('#delete_cc').click(function() {
            $('#cc-div').hide();
        })
        $('#delete_bcc').click(function() {
            $('#bcc-div').hide();
        })
        $('#delete_reply').click(function() {
            $('#reply-div').hide();
        })
        $('#delete_follow').click(function() {
            $('#follow-div').hide();
        })

        // $("button").click(function() {
        //     var email = $("all-emails").val();
        //     $("#store-emails").val(email);

        // })

        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
    </script>

    <script>
    function display_popup() {
        var popup = document.getElementById('li-hide');
        if (popup.style.display === 'none') {
            popup.style.display = 'block';
        } else {
            popup.style.display = 'none';
        }
    }

    function display_cc() {
        var popup = document.getElementById('cc-div');
        if (popup.style.display === 'none') {
            popup.style.display = 'block';
        } else {
            popup.style.display = 'none';
        }
    }

    function display_bcc() {
        var popup1 = document.getElementById('bcc-div');
        if (popup1.style.display === 'none') {
            popup1.style.display = 'block';
        } else {
            popup1.style.display = 'none';
        }
    }

    function display_reply() {
        var popup2 = document.getElementById('reply-div');
        if (popup2.style.display === 'none') {
            popup2.style.display = 'block';
        } else {
            popup2.style.display = 'none';
        }
    }

    function display_follow() {
        var popup3 = document.getElementById('follow-div');
        if (popup3.style.display === 'none') {
            popup3.style.display = 'block';
        } else {
            popup3.style.display = 'none';
        }
    }


    // second work 

    // const emailTags = document.getElementById('email-tags');
    // const emailInput = document.getElementById('to');

    // emailInput.addEventListener('keydown', function(event) {

    //     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    //     if (emailInput.value.match(mailformat)) {



    //         if (event.key === 'Enter' || event.key === ',' && emailInput.value.trim() !== '') {
    //             event.preventDefault();
    //             createEmailTag(emailInput.value.trim());
    //             emailInput.value = '';
    //         }
    //     }
    // });


    function createEmailTag(email) {
        const tag = document.createElement('div');
        tag.classList.add('email-tag');

        const tagText = document.createElement('span');
        tagText.classList.add('email-tag-text');
        tagText.textContent = email;
        tagText.addEventListener('click', function() {
            const editedEmail = prompt('Edit email', tagText.textContent);
            if (editedEmail !== null) {
                const trimmedEmail = editedEmail.trim();
                if (trimmedEmail !== '') {
                    tagText.textContent = trimmedEmail;
                } else {
                    tag.remove();
                }
            }
        });

        const tagDelete = document.createElement('span');
        tagDelete.classList.add('email-tag-delete');
        tagDelete.innerHTML = '&times;';
        tagDelete.addEventListener('click', function() {
            tag.remove();
        });

        tag.appendChild(tagText);
        tag.appendChild(tagDelete);
        emailTags.appendChild(tag);
    }



    // on enter, insert email code starts here 
    $(document).on("keyup", "input.mid", function(e) {
        // if(e.which == 13){
        var inputVal = $(this).val();

        if (inputVal.charAt(inputVal.length - 1) == ",") {

            // alert('sd');
        }


        var keynum;

        if (window.event) { // IE                  
            keynum = e.keyCode;
        } else if (e.which) { // Netscape/Firefox/Opera                 
            keynum = e.which;
        }


        if (e.which == 8) {

            if (inputVal == "") {
                $(this).parent().prev().remove();

            }

        }


        const emailInput2 = document.getElementById('mid_to');
        const emailInput3 = document.getElementById('mid_cc');

        // emailInput2.addEventListener('keydown', function(event) {



        if (String.fromCharCode(keynum) == "," || (e.which == 13)) {

            var mailformat2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var newEmail = $(".all-emails").val();

            if (newEmail.match(mailformat2)) {

                // store all the emails
                var existingEmails = $("#store-emails").val();
                if (existingEmails) {
                    existingEmails += ", " + newEmail;
                } else {
                    existingEmails = newEmail;
                }
                $("#store-emails").val(existingEmails);

                inputVal.replace(",", "");
                inputVal.replace(",", "");
                inputVal.replace(",", "");
                inputVal.replace(",", "");

                emli = "<li class='recipient'><span class='name' id='live_edit'>" + inputVal +
                    "</span><span class='email'>,</span><a onclick='this.parentNode.remove();' class='button icon remove'></a></li>";

                //this.parentNode.parentNode.appendChild(emli); 
                $(this).closest('ul.recipient-input li').eq(-1).before(emli);
                //$('li:last')
                $(this).val('');
                $(this).val('');

            }
            if (emailInput3.value.match(mailformat2)) {

                inputVal.replace(",", "");
                inputVal.replace(",", "");
                inputVal.replace(",", "");
                inputVal.replace(",", "");

                emli1 = "<li class='recipient'><span class='name_cc' id='live_edit'>" + inputVal +
                    "</span><span class='email'>,</span><a onclick='this.parentNode.remove();' class='button icon remove'></a></li>";

                //this.parentNode.parentNode.appendChild(emli); 
                $(this).closest('ul.recipient-input li').eq(-1).before(emli1);
                //$('li:last')
                $(this).val('');
                $(this).val('');

            }
        }



        $(document).ready(function() {
            $('.name').each(function() {
                $(this).click(function() {
                    var clickedElement = $(this); // Store the clicked element
                    $('.modal-bg').css('display', 'block');
                    var tagText0 = clickedElement
                        .text(); // Get the text content of the clicked element with class 'name'
                    $('#id_too').html(
                        '<input type="text" class="modal_style" id="edit_input" value="' +
                        tagText0 + '">'
                    ); // Replace the content with an input field

                    // Handle saving the edited text
                    $('#save_button').click(function() {
                        var editedEmail0 = $('#edit_input').val()
                            .trim();
                        if (editedEmail0 !== '') {
                            clickedElement.text(
                                editedEmail0
                            ); // Update the text content of the clicked element with the edited email
                        } else {
                            clickedElement
                                .remove(); // Remove the clicked element if the edited email is empty
                        }

                        // Hide the modal
                        $('.modal-bg').css('display', 'none');
                    });

                    // Handle canceling the edit
                    $('#cancel_button').click(function() {
                        // Hide the modal
                        $('.modal-bg').css('display', 'none');
                    });
                });
            });
        });
        $(document).ready(function() {
            $('.name_cc').each(function() {
                $(this).click(function() {
                    var clickedElement1 = $(this); // Store the clicked element
                    $('.modal-bg').css('display', 'block');
                    var tagText1 = clickedElement1
                        .text(); // Get the text content of the clicked element with class 'name'
                    $('#id_too').html(
                        '<input type="text" class="modal_style" id="edit_input" value="' +
                        tagText1 + '">'
                    ); // Replace the content with an input field

                    // Handle saving the edited text
                    $('#save_button').click(function() {
                        var editedEmail1 = $('#edit_input').val()
                            .trim();
                        if (editedEmail1 !== '') {
                            clickedElement1.text(
                                editedEmail1
                            ); // Update the text content of the clicked element with the edited email
                        } else {
                            clickedElement1
                                .remove(); // Remove the clicked element if the edited email is empty
                        }

                        // Hide the modal
                        $('.modal-bg').css('display', 'none');
                    });

                    // Handle canceling the edit
                    $('#cancel_button').click(function() {
                        // Hide the modal
                        $('.modal-bg').css('display', 'none');
                    });
                });
            });
        });



        function createEmailTag(email) {
            const tag = document.createElement('div');
            tag.classList.add('email-tag');

            const tagText = document.createElement('span');
            tagText.classList.add('email-tag-text');
            tagText.textContent = email;
            tagText.addEventListener('click', function() {
                const editedEmail = prompt('Edit email', tagText.textContent);
                if (editedEmail !== null) {
                    const trimmedEmail = editedEmail.trim();
                    if (trimmedEmail !== '') {
                        tagText.textContent = trimmedEmail;
                    } else {
                        tag.remove();
                    }
                }
            });

            const tagDelete = document.createElement('span');
            tagDelete.classList.add('email-tag-delete');
            tagDelete.innerHTML = '&times;';
            tagDelete.addEventListener('click', function() {
                tag.remove();
            });

            tag.appendChild(tagText);
            tag.appendChild(tagDelete);
            emailTags.appendChild(tag);
        }

        //this. alert("You've entered: " + inputVal);
        //.//this.


        // }

    });


    // js for adding mutiple emails 
    $(document).ready(function() {
        // Function to handle file selection and display attachment list
        function handleFileSelection() {
            var fileList = $('#attachment-input')[0].files;
            var attachmentList = $('#attachment-list');
            attachmentList.empty();

            for (var i = 0; i < fileList.length; i++) {
                var file = fileList[i];
                var listItem = $('<li>').addClass('attachment-item');
                listItem.append($('<i>').addClass('fas fa-paperclip'));
                listItem.append($('<span>').addClass('attachment-name').text(file.name));
                listItem.append($('<i>').addClass('fas fa-times remove-attachment'));
                attachmentList.append(listItem);
            }
        }

        // Event listener for file input change
        $('#attachment-input').on('change', function() {
            handleFileSelection();
        });

        // Event listener for adding attachment button
        $('#add-attachment-button').on('click', function() {
            $('#attachment-input').click();
        });

        // Event listener for removing attachment
        $('#attachment-list').on('click', '.remove-attachment', function() {
            var listItem = $(this).closest('.attachment-item');
            listItem.remove();
            // Clear the file input to reflect the removed attachment
            $('#attachment-input').val('');
        });
    });
    </script>
</body>

</html>
<script>
// (F) ATTACH ON PAGE LOAD
document.addEventListener("DOMContentLoaded", () => {
    tp.init();
    /** tp.attach({
       target: document.getElementById("demoA")
     }); **/
    tp.attach({
        target: document.getElementById("demoB"),
        "24": true
    });
});
</script>


<?php
			
			Session::set_ceedata("cee_email_sent","");
			
			?>

<div id="hash"></div>