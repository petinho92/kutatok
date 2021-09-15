class RegistrantsFormData {
    private _name : String = "";
    private _email : String = "";
    private _city : string = "";
    private _school : string = "";
    private _programs : Array<number> = [];

    get name(): String {
        return this._name;
    }

    set name(value: String) {
        this._name = value;
    }

    get email(): String {
        return this._email;
    }

    set email(value: String) {
        this._email = value;
    }

    get city(): string {
        return this._city;
    }

    set city(value: string) {
        this._city = value;
    }

    get school(): string {
        return this._school;
    }

    set school(value: string) {
        this._school = value;
    }

    get programs(): Array<number> {
        return this._programs;
    }

    set programs(value: Array<number>) {
        this._programs = value;
    }
}export default RegistrantsFormData;