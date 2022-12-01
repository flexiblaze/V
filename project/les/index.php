




<div class="comment-form-container">
    <form action="" id="frmComment" method="post">
        <div class="input-row">
            <div class="label">
                Name: <span id="name-info"></span>
            </div>
            <input class="input-field" id="name" type="text" name="user">
        </div>
        <div class="input-row">
            <div class="label">
                Message: <span id="message-info"></span>
            </div>
            <textarea class="input-field" id="message" name="message"
                rows="4"></textarea>
        </div>
        <div>
            <input type="hidden" name="add" value="post" />
            <button type="submit" name="submit" id="submitButton"
                class="btn-submit">Publish</button>
            <img src="LoaderIcon.gif" id="loader" />
        </div>
    </form>
</div>