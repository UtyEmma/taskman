const Form = {
    'process' : async (event, action) => {
        event.preventDefault();
        let validateRequest = validate.check(event);
        let data = event.target;
        let response = '';
        if (validateRequest) {
            response = await Request.post(data, `${action}`);
        }
        return response;
    }
}