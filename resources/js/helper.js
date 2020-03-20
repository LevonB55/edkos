export default class Helper {
    static allowFloatNumbers (e) {
        let input = $(e.target);
        if(isNaN(input.val())) {
            input.val('');
        }
    }
}
