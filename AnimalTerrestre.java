package AnimalesZologicos;

public class AnimalTerrestre extends Animal {
	
	private int canti_pata;
	private String tipo_alimento;
	private int horas_sueño;
	
	//Constructor
	public AnimalTerrestre() {}
	public AnimalTerrestre(String _tipo,String _Nombre,String _Pais, String _Fecha_ingreso, int _canti_patas, String _tipo_alimento, int _hora_sueño) {
		super(_tipo, _Nombre,_Pais,_Fecha_ingreso);
		this.canti_pata = _canti_patas;
		this.tipo_alimento = _tipo_alimento;
		this.horas_sueño = _hora_sueño;
	}
	//SETTERS GETTERS
	public int getCanti_pata() {
		return canti_pata;
	}
	public void setCanti_pata(int canti_pata) {
		this.canti_pata = canti_pata;
	}
	public String getTipo_alimento() {
		return tipo_alimento;
	}
	public void setTipo_alimento(String tipo_alimento) {
		this.tipo_alimento = tipo_alimento;
	}
	public int getHoras_sueño() {
		return horas_sueño;
	}
	public void setHoras_sueño(int horas_sueño) {
		this.horas_sueño = horas_sueño;
	}
	//ToString
	@Override
	public String toString() {
		return "AnimalTerrestre [canti_pata=" + canti_pata + ", tipo_alimento=" + tipo_alimento + ", horas_sueño="
				+ horas_sueño + super.toString() + "]";
	}
	
	
	
}
